<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/index.html.twig');
    }

    public function createSyndicAction(Request $request)
    {
        $syndic = new Syndic();

        $form = $this->createForm(CreateSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $syndic->getUser()->setType('SYNDIC');
            $syndic->getUser()->addRole('ROLE_SYNDIC');
            $em = $this->getDoctrine()->getManager();
            $em->persist($syndic);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($syndic->getUser());

            $password = $_POST['akyos_easycoprobundle_syndic']['user']['plainPassword']['first'];
            $documentService = $this->get('akyos.generate_document');
            $documentService->generateRegistrationDocument($this->getUser(), $syndic, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été crée avec succès.');

            return $this->redirectToRoute('admin_list_syndics');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/create_syndic.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function listSyndicAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndics = $em->getRepository(Syndic::class)
            ->findAll();

        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/list_syndic.html.twig', array(
            'syndics' => $syndics,
        ));
    }

    public function showSyndicAction(Syndic $syndic)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/show_syndic.html.twig', array(
            'syndic' => $syndic,
        ));
    }

    public function editSyndicAction(Request $request, Syndic $syndic)
    {
        $form = $this->createForm(CreateSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte SYNDIC a bien été modifié.');

            return $this->redirectToRoute('admin_show_syndic', array(
                'id' => $syndic->getId(),
            ));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/edit_syndic.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteSyndicAction(Request $request, Syndic $syndic)
    {
        if ($syndic !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($syndic);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte SYNDIC a bien été supprimé.');

            return $this->redirectToRoute('admin_list_syndics');
        }

        $request->getSession()->getFlashBag()->add('info', "Ce compte SYNDIC n'existe pas !");

        return $this->redirectToRoute('admin_list_syndics');
    }
}
