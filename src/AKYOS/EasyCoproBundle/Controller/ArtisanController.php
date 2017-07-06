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
use AKYOS\EasyCoproBundle\Form\CreateDocumentForArtisanType;
use AKYOS\EasyCoproBundle\Form\CreateLocataireType;
use AKYOS\EasyCoproBundle\Form\CreateLotType;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use AKYOS\EasyCoproBundle\Form\MessageReplyType;
use AKYOS\EasyCoproBundle\Form\MessageType;
use AKYOS\EasyCoproBundle\Form\EditArtisanType;
use AKYOS\EasyCoproBundle\Form\EditCategorieType;
use AKYOS\EasyCoproBundle\Form\EditCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\EditCoproprieteType;
use AKYOS\EasyCoproBundle\Form\EditDocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArtisanController extends Controller
{

    public function indexAction()
    {

        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/index.html.twig');
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

            return $this->redirectToRoute('artisan_show', array('id' => $artisan->getId()));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction()
    {

        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/show.html.twig', array(
            'artisan' => $artisan
        ));
    }

    // ACTIONS LIEES AUX DOCUMENTS
    //----------------------------

    public function showDocumentAction(Document $document)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/show_document.html.twig', array(
            'document' => $document
        ));
    }

    public function gestionDocumentsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());

        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCountByArtisan($artisan);
        $allDocuments = $em->getRepository(Document::class)->findArtisanDocumentsSortedByDate($artisan);

        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }


    // ACTIONS LIEES AUX MSGS
    //-----------------------

    public function showMessageAction(Request $request, Message $message)
    {
        if($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()){
            $message->setIsLu(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $reply = new Message();
            $form = $this->createForm(MessageReplyType::class, $reply);
            $sender=$this->getUser();
            $reply
                ->setDateEnvoi(new \DateTime())
                ->setExpediteur($sender)
                ->setIsSupprime(false)
                ->setIsLu(false);

            //recuperer l'expéditeur du message
            $expediteur=$message->getExpediteur();

            //l'utiliser comme cible de la réponse
            $reply->setDestinataire($expediteur);

            //recuperer le titre original du message
            $titre=$message->getTitre();

            //l'utiliser comme titre de sujet avec "Re:" avant
            $reply->setTitre('Re:'.$titre);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($reply);
                $em->flush();
                $this->addFlash('info', 'Votre réponse a été envoyé !');
                return $this->redirectToRoute('artisan_inbox');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/show_message.html.twig', array(
                'message' => $message,'formReply' => $form->createView()
            ));
        }
        else{
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function showMessageFromCorbeilleAction(Request $request, Message $message)
    {
        if($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()){
            $message->setIsLu(true);

            $reply = new Message();
            $form = $this->createForm(MessageReplyType::class, $reply);
            $sender=$this->getUser();
            $reply
                ->setDateEnvoi(new \DateTime())
                ->setExpediteur($sender)
                ->setIsSupprime(false)
                ->setIsLu(false);

            //recuperer l'expéditeur du message
            $expediteur=$message->getExpediteur();

            //l'utiliser comme cible de la réponse
            $reply->setDestinataire($expediteur);

            //recuperer le titre original du message
            $titre=$message->getTitre();

            //l'utiliser comme titre de sujet avec "Re:" avant
            $reply->setTitre('Re:'.$titre);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($reply);
                $em->flush();
                $this->addFlash('info', 'Votre réponse a été envoyé !');
                return $this->redirectToRoute('artisan_corbeille');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/show_message_from_corbeille.html.twig', array(
                'message' => $message,'formReply' => $form->createView()
            ));
        }
        else{
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function showMessagefromEnvoyesAction(Request $request, Message $message)
    {
        if($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()){
            $message->setIsLu(true);

            $reply = new Message();
            $form = $this->createForm(MessageReplyType::class, $reply);
            $sender=$this->getUser();
            $reply
                ->setDateEnvoi(new \DateTime())
                ->setExpediteur($sender)
                ->setIsSupprime(false)
                ->setIsLu(false);

            //recuperer l'expéditeur du message
            $expediteur=$message->getExpediteur();

            //l'utiliser comme cible de la réponse
            $reply->setDestinataire($expediteur);

            //recuperer le titre original du message
            $titre=$message->getTitre();

            //l'utiliser comme titre de sujet avec "Re:" avant
            $reply->setTitre('Re:'.$titre);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($reply);
                $em->flush();
                $this->addFlash('info', 'Votre réponse a été envoyé !');
                return $this->redirectToRoute('artisan_messages_envoyes');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/show_message_from_envoyes.html.twig', array(
                'message' => $message,'formReply' => $form->createView()
            ));
        }
        else{
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function deleteMessageAction(Request $request, Message $message)
    {
        if ($message !== null && $message->getIsSupprime()==false) {
            $em = $this->getDoctrine()->getManager();
            $em->setIsSupprime(true);
            $em->update($message);
            $em->flush();
            $this->addFlash('info', 'Le Message a été mis dans la corbeille.');
            return $this->redirectToRoute('artisan_inbox');
        }
        $this->addFlash('info', "Ce Message n'existe pas !");
        return $this->redirectToRoute('artisan_inbox');
    }

    public function revertMessageAction(Request $request, Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsSupprime(false);
            $em->persist($message);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/corbeille.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function inboxAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setisSupprime(false);
        $message->setIsLu(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/inbox.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function messagesEnvoyesAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setIsSupprime(false);
        $message->setIsLu(false);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/messages_envoyes.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function corbeilleAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setIsSupprime(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/corbeille.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function nowSupprimeAction(Request $request, Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsSupprime(true);
            $message->setIsLu(true);
            $em->persist($message);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/corbeille.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function notLuAction(Request $request, Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsLu(false);
            $em->persist($message);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('artisan_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/inbox.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function deleteMessageCorbeilleAction(Request $request, Message $message)
    {
        if ($message !== null && $message->getIsSupprime()==true ) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
            $this->addFlash('info', 'Le Message a été définitivement supprimé.');
            return $this->redirectToRoute('artisan_corbeille');
        }
        $this->addFlash('info', "Ce Message n'existe pas !");
        return $this->redirectToRoute('artisan_corbeille');
    }

}