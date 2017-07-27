<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Lot;
use AKYOS\EasyCoproBundle\Entity\Document;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Message;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\User;
use AKYOS\EasyCoproBundle\Form\CreateArtisanType;
use AKYOS\EasyCoproBundle\Form\CreateCategorieType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprieteType;
use AKYOS\EasyCoproBundle\Form\CreateDocumentType;
use AKYOS\EasyCoproBundle\Form\CreateLocataireType;
use AKYOS\EasyCoproBundle\Form\CreateLotType;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use AKYOS\EasyCoproBundle\Form\EditLocataireType;
use AKYOS\EasyCoproBundle\Form\EditUserType;
use AKYOS\EasyCoproBundle\Form\MessageReplyType;
use AKYOS\EasyCoproBundle\Form\MessageType;
use AKYOS\EasyCoproBundle\Form\EditArtisanType;
use AKYOS\EasyCoproBundle\Form\EditCategorieType;
use AKYOS\EasyCoproBundle\Form\EditCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\EditCoproprieteType;
use AKYOS\EasyCoproBundle\Form\EditDocumentType;
use AKYOS\EasyCoproBundle\Form\EditSyndicType;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $admin = $this->getUser();
        $form = $this->createForm(EditUserType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('admin_show');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/edit.html.twig', array(
            'form' => $form->createView(),
            'admin' => $admin,
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $admin = $this->getUser();

        $nbMessagesTotal = $em->getRepository(Message::class)->findNbMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/show.html.twig', array(
            'admin' => $admin,
            'nbMessagesTotal' => $nbMessagesTotal,
        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $syndics = $em->getRepository(Syndic::class)->findAll();
        $nbMessages = $em->getRepository(Message::class)->findUnreadMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/menu.html.twig', array(
            'syndics' => $syndics,
            'nbMessages' => $nbMessages,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/menuUser.html.twig');
    }

    public function parametersAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/parameters.html.twig');
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

//            $password = $_POST['akyos_easycoprobundle_syndic']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $syndic, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été crée avec succès.');

            return $this->redirectToRoute('admin_show_syndic', array(
                'id' => $syndic->getId(),
            ));
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
        $form = $this->createForm(EditSyndicType::class, $syndic);
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
            'form' => $form->createView(), 'syndic' => $syndic,
        ));
    }

    public function deleteSyndicAction(Request $request, Syndic $syndic)
    {
        if ($syndic !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($syndic);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('admin_list_syndics');
        }

        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('admin_list_syndics');
    }

}
