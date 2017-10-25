<?php

namespace AKYOS\BackofficeBundle\Controller;

use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\BackofficeBundle\Form\CreateSyndicType;
use AKYOS\UserBundle\Form\EditUserType;
use AKYOS\BackofficeBundle\Form\EditSyndicType;
use AKYOS\MailboxBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('AKYOSBackofficeBundle:Admin:index.html.twig');
    }

    public function editAction(Request $request)
    {
        $admin = $this->getUser();
        $form  = $this->createForm(EditUserType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('admin_show');
        }
        return $this->render('AKYOSBackofficeBundle:Admin:edit.html.twig', array(
            'form'  => $form->createView(),
            'admin' => $admin,
        ));
    }

    public function showAction()
    {
        $admin = $this->getUser();

        return $this->render('AKYOSBackofficeBundle:Admin:show.html.twig', array(
            'admin' => $admin,
        ));
    }

    public function menuAction()
    {

        $em                       = $this->getDoctrine()->getManager();
        $syndics                  = $em->getRepository(Syndic::class)->findAll();
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('AKYOSBackofficeBundle:Admin:menu.html.twig', array(
            'syndics'                  => $syndics,
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('AKYOSBackofficeBundle:Admin:menuUser.html.twig');
    }

    public function parametersAction()
    {
        return $this->render('AKYOSBackofficeBundle:Admin:parameters.html.twig');
    }

    public function createSyndicAction(Request $request)
    {
        $syndic = new Syndic();

        $form = $this->createForm(CreateSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $syndic->getUser()->setType('SYNDIC');
            $syndic->getUser()->addRole('ROLE_SYNDIC');
            $syndic->setStatut('Valide');
            $em = $this->getDoctrine()->getManager();
            $em->persist($syndic);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($syndic->getUser());

//            $password = $_POST['akyos_BackofficeBundle_syndic']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $syndic, $password);

            $this->addFlash('info', 'Le nouveau compte a été crée avec succès.');

            return $this->redirectToRoute('admin_show_syndic', array(
                'id' => $syndic->getId(),
            ));
        }

        return $this->render('AKYOSBackofficeBundle:Admin:create_syndic.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function listSyndicAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $syndics = $em->getRepository(Syndic::class)
                      ->findAll();

        return $this->render('AKYOSBackofficeBundle:Admin:list_syndic.html.twig', array(
            'syndics' => $syndics,
        ));
    }

    public function showSyndicAction(Syndic $syndic)
    {
        $em = $this->getDoctrine()->getManager();
        $allReceivedMailsCount = $em->getRepository(Mail::class)->countAllReceivedMails($syndic->getUser());

        return $this->render('AKYOSBackofficeBundle:Admin:show_syndic.html.twig', array(
            'syndic' => $syndic,
            'allReceivedMailsCount' => $allReceivedMailsCount
        ));
    }

    public function editSyndicAction(Request $request, Syndic $syndic)
    {
        $form = $this->createForm(EditSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('info', 'Le compte SYNDIC a bien été modifié.');

            return $this->redirectToRoute('admin_show_syndic', array(
                'id' => $syndic->getId(),
            ));
        }

        return $this->render('AKYOSBackofficeBundle:Admin:edit_syndic.html.twig', array(
            'form' => $form->createView(), 'syndic' => $syndic,
        ));
    }

    public function deleteSyndicAction(Syndic $syndic)
    {
        if ($syndic !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($syndic);
            $em->flush();

            $this->addFlash('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('admin_list_syndics');
        }

        $this->addFlash('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('admin_list_syndics');
    }

}
