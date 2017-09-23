<?php

namespace AKYOS\BackofficeBundle\Controller;

use AKYOS\DocumentBundle\Entity\Category;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Form\EditCoproprieteType;
use AKYOS\BackofficeBundle\Form\EditArtisanType;
use AKYOS\MailboxBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtisanController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        $copropriete = $artisan->getCopropriete();
        $request->getSession()->set('copro', $copropriete);

        $nbDocuments = $em->getRepository(Document::class)->findNbDocumentsByArtisan($artisan);
        $allReceivedMailsCount = $em->getRepository(Mail::class)->countAllReceivedMails($this->getUser());
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Artisan/index.html.twig', array(
            'nbDocuments' => $nbDocuments,
            'allReceivedMailsCount' => $allReceivedMailsCount,
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        $form = $this->createForm(EditArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('artisan_show');
        }

        return $this->render('@AKYOSBackoffice/Artisan/edit.html.twig', array(
            'form' => $form->createView(),
            'artisan'=> $artisan,
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSBackoffice/Artisan/show.html.twig', array(
            'artisan' => $artisan
        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Artisan/menu.html.twig', array(
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function parametersAction()
    {
        return $this->render('@AKYOSBackoffice/Artisan/parameters.html.twig');
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSBackoffice/Artisan/menuUser.html.twig');
    }

    public function showCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        $copropriete = $artisan->getCopropriete();
        $documents = $em->getRepository(Document::class)->findAllByCopropriete($copropriete);
        $nbArtisans = $em->getRepository(Artisan::class)->findNbrArtisansByCopropriete($copropriete);

        return $this->render('@AKYOSBackoffice/Artisan/show_copropriete.html.twig', array(
            'artisan' => $artisan,
            'documents' => $documents,
            'copropriete' => $copropriete,
            'nbArtisans' => $nbArtisans,
        ));
    }

    public function editCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        $copropriete = $artisan->getCopropriete();
        $form = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('artisan_show_copropriete');
        }

        return $this->render('@AKYOSBackoffice/Artisan/edit_copropriete.html.twig', array(
            'my_form' => $form->createView(),
            'coproprieteId' => $copropriete->getId(),
        ));
    }

}
