<?php

namespace AKYOS\BackofficeBundle\Controller;

use AKYOS\DocumentBundle\Entity\Categorie;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\BackofficeBundle\Form\EditCoproprietaireType;
use AKYOS\BackofficeBundle\Form\EditCoproprieteType;
use AKYOS\BackofficeBundle\Form\EditSyndicType;
use AKYOS\MailboxBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AKYOS\DocumentBundle\Entity\Document;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CoproprietaireController extends Controller
{
    public function indexAction(Request $request)
    {
        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete    = $coproprietaire->getLot()->getCopropriete();
        $request->getSession()->set('copro', $copropriete);

        $nbDocuments              = $em->getRepository(Document::class)->findNbDocumentsByLot($coproprietaire->getLot());
        $allReceivedMailsCount    = $em->getRepository(Mail::class)->countAllReceivedMails($this->getUser());
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Coproprietaire/index.html.twig', array(
            'nbDocuments'              => $nbDocuments,
            'allReceivedMailsCount'    => $allReceivedMailsCount,
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function editAction(Request $request)
    {
        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $form           = $this->createForm(EditCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('coproprietaire_show');
        }
        return $this->render('@AKYOSBackoffice/Coproprietaire/edit.html.twig', array(
            'form'           => $form->createView(),
            'coproprietaire' => $coproprietaire,
        ));
    }

    public function showAction()
    {
        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());

        $nbDocuments           = $em->getRepository(Document::class)->findNbDocumentsByLot($coproprietaire->getLot());
        $allReceivedMailsCount = $em->getRepository(Mail::class)->countAllReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Coproprietaire/show.html.twig', array(
            'coproprietaire'        => $coproprietaire,
            'nbDocuments'           => $nbDocuments,
            'allReceivedMailsCount' => $allReceivedMailsCount,
        ));
    }

    public function menuAction()
    {

        $em                       = $this->getDoctrine()->getManager();
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Coproprietaire/menu.html.twig', array(
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSBackoffice/Coproprietaire/menuUser.html.twig');
    }

    public function parametersAction(Request $request)
    {
        $request->getSession()->set('copro', null);
        return $this->render('@AKYOSBackoffice/Coproprietaire/parameters.html.twig');
    }

    public function showCoproprieteAction(Request $request)
    {
        $em                 = $this->getDoctrine()->getManager();
        $coproprietaire     = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete        = $coproprietaire->getLot()->getCopropriete();
        $documents          = $em->getRepository(Document::class)->findDocumentsByCopropriete($copropriete);
        $nbrecoproprietaire = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesByCopropriete($copropriete);
        return $this->render('@AKYOSBackoffice/Coproprietaire/show_copropriete.html.twig', array(
            'coproprietaire'     => $coproprietaire,
            'documents'          => $documents,
            'copropriete'        => $copropriete,
            'nbrecoproprietaire' => $nbrecoproprietaire,
        ));
    }

    public function editCoproprieteAction(Request $request)
    {
        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete    = $coproprietaire->getLot()->getCopropriete();
        $form           = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('coproprietaire_show_copropriete');
        }

        return $this->render('@AKYOSBackoffice/Coproprietaire/edit_copropriete.html.twig',
                             [
                                 'my_form'       => $form->createView(),
                                 'coproprieteId' => $copropriete->getId(),
                             ]);
    }

    public function showSyndicAction()
    {

        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());

        $syndic = $em->getRepository(Syndic::class)->findSyndicByCoproprietaire($coproprietaire);

        return $this->render('AKYOSBackofficeBundle:Coproprietaire:show_syndic.html.twig', array(
            'syndic' => $syndic,
        ));

    }

    public function editSyndicAction(Request $request)
    {

        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());

        $syndic = $em->getRepository(Syndic::class)->findSyndicByCoproprietaire($coproprietaire);
        $form   = $this->createForm(EditSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('coproprietaire_show_syndic');
        }

        return $this->render('AKYOSBackofficeBundle:Coproprietaire:edit_syndic.html.twig', array(
            'syndic' => $syndic,
            'form'   => $form->createView(),
        ));
    }


    public function showDocumentAction(Document $document)
    {
        return $this->render('@AKYOSBackoffice/Coproprietaire/show_document.html.twig', array(
            'document' => $document
        ));
    }

    public function gestionDocumentsAction(Request $request)
    {
        $em             = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $lot            = $coproprietaire->getLot();

        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCountByLot($lot);
        $allDocuments    = $em->getRepository(Document::class)->findLotDocumentsSortedByDate($lot);

        return $this->render('@AKYOSBackoffice/Coproprietaire/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount'  => count($allDocuments),
            'documents'       => $allDocuments,
        ));
    }

    // ACTIONS REQUETES AJAX
    //----------------------

    public function listCategorieDocumentsAction(Request $request, $categorieId)
    {

        if ($request->isXmlHttpRequest()) {
            $em             = $this->getDoctrine()->getManager();
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
            $lot            = $coproprietaire->getLot();

            if ($categorieId == 'all') {
                $documents = $em->getRepository(Document::class)->findAllDocumentsByLot($lot);
            } else {
                $categorie = $em->getRepository(Categorie::class)->find($categorieId);
                $documents = $em->getRepository(Document::class)->findLotDocumentsByCategorie($categorie, $lot);
            }
            $encoder    = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $serializer = new Serializer(array($normalizer), array($encoder));

            $jsonDocuments = $serializer->serialize($documents, 'json');

            return new JsonResponse(array(
                                        'data' => $jsonDocuments
                                    ));
        }
        throw new HttpException('501', 'Invalid Call');
    }

}

