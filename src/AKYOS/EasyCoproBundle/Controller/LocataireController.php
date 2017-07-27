<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Document;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Message;
use AKYOS\EasyCoproBundle\Form\EditCoproprieteType;
use AKYOS\EasyCoproBundle\Form\MessageReplyType;
use AKYOS\EasyCoproBundle\Form\MessageType;
use AKYOS\EasyCoproBundle\Form\EditLocataireType;
use AKYOS\MailboxBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class LocataireController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $request->getSession()->set('copro', $copropriete);

        $nbDocuments = $em->getRepository(Document::class)->findNbDocumentsByLotForLocataire($locataire->getLot());
        $nbMessagesTotal = $em->getRepository(Message::class)->findNbMessagesByUser($this->getUser());
        $nbMessagesNonLus = $em->getRepository(Message::class)->findUnreadMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/index.html.twig', array(
            'nbDocuments' => $nbDocuments,
            'nbMessagesTotal' => $nbMessagesTotal,
            'nbMessagesNonLus' => $nbMessagesNonLus,
            ));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $form = $this->createForm(EditLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('locataire_show');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/edit.html.twig', array(
            'form' => $form->createView(),'locataire' => $locataire
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());

        $nbMessagesTotal = $em->getRepository(Message::class)->findNbMessagesByUser($this->getUser());
        $nbDocuments = $em->getRepository(Document::class)->findNbDocumentsByLotForLocataire($locataire->getLot());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show.html.twig', array(
            'locataire' => $locataire,
            'nbDocuments' => $nbDocuments,
            'nbMessagesTotal' => $nbMessagesTotal,
        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/menu.html.twig', array(
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/menuUser.html.twig');
    }

    public function parametersAction(){

        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/parameters.html.twig',array('locataire'=> $locataire));
    }

    public function showCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $documents = $em->getRepository(Document::class)->findDocumentsByCopropriete($copropriete);
        $nbrelocataire = $em->getRepository(Locataire::class)->findNbrLocatairesByCopropriete($copropriete);
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_copropriete.html.twig', array(
            'locataire' =>$locataire,
            'documents'=>$documents,
            'copropriete'=>$copropriete,
            'nbrelocataire' =>$nbrelocataire,
        ));
    }

    public function editCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $form = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('locataire_show_copropriete');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/edit_copropriete.html.twig',
            ['my_form' => $form->createView(),
                'coproprieteId'=>$copropriete->getId(),
            ]);
    }


    // ACTIONS LIEES AUX DOCUMENTS
    //----------------------------

    public function showDocumentAction(Document $document)
    {
        $locMsg = $this->getDoctrine()->getManager();
        $locataire = $locMsg->getRepository(Locataire::class)->findOneByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_document.html.twig', array(
            'document' => $document, 'locataire' => $locataire
        ));
    }

    public function gestionDocumentsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $lot = $locataire->getLot();

        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCountByLotForLocataires($lot);
        $allDocuments = $em->getRepository(Document::class)->findLotDocumentsSortedByDateForLocataires($lot);

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }


    // ACTIONS REQUETES AJAX
    //----------------------

    public function listCategorieDocumentsAction(Request $request, $categorieId) {

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
            $lot = $locataire->getLot();

            if ($categorieId == 'all') {
                $documents = $em->getRepository(Document::class)->findAllDocumentsByLotForLocataires($lot);
            } else {
                $categorie = $em->getRepository(Categorie::class)->find($categorieId);
                $documents = $em->getRepository(Document::class)->findLotDocumentsByCategorieForLocataires($categorie,$lot);
            }

            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $serializer = new Serializer(array($normalizer), array($encoder));

            $jsonDocuments = $serializer->serialize($documents, 'json');

            return new JsonResponse(array(
                'data'=> $jsonDocuments
            ));
        }
        throw new HttpException('501', 'Invalid Call');
    }


}