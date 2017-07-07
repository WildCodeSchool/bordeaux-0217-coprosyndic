<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Message;
use AKYOS\EasyCoproBundle\Form\EditCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\EditCoproprieteType;
use AKYOS\EasyCoproBundle\Form\MessageReplyType;
use AKYOS\EasyCoproBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AKYOS\EasyCoproBundle\Entity\Document;
use Symfony\Component\HttpFoundation\Response;

class CoproprietaireController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete = $coproprietaire->getLot()->getCopropriete();
        $request->getSession()->set('copro', $copropriete);

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $form = $this->createForm(EditCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('coproprietaire_show');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/edit.html.twig', array(
            'form' => $form->createView(),
            'coproprietaire' => $coproprietaire,
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show.html.twig', array(
            'coproprietaire' => $coproprietaire
        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $nbMessages = $em->getRepository(Message::class)->findUnreadMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/menu.html.twig', array(
            'nbMessages' => $nbMessages,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/menuUser.html.twig');
    }

    public function parametersAction(Request $request)
    {
        $request->getSession()->set('copro', null);
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/parameters.html.twig');
    }

    public function showDocumentAction(Document $document)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_document.html.twig', array(
            'document' => $document
        ));
    }

    public function gestionDocumentsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $lot = $coproprietaire->getLot();

        $categoriesCount = $em->getRepository(Document::class)->findCategoriesCountByLot($lot);
        $allDocuments = $em->getRepository(Document::class)->findLotDocumentsSortedByDate($lot);

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }

    public function showCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete = $coproprietaire->getLot()->getCopropriete();
        $documents = $em->getRepository(Document::class)->findDocumentsByCopropriete($copropriete);
        $nbrecoproprietaire = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesByCopropriete($copropriete);
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_copropriete.html.twig', array(
            'coproprietaire' =>$coproprietaire,
            'documents'=>$documents,
            'copropriete'=>$copropriete,
            'nbrecoproprietaire' =>$nbrecoproprietaire,
        ));
    }

    public function editCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $copropriete = $coproprietaire->getLot()->getCopropriete();
        $form = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('coproprietaire_show_copropriete');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/edit_copropriete.html.twig',
            ['my_form' => $form->createView(),
                'coproprieteId'=>$copropriete->getId(),
            ]);
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
                return $this->redirectToRoute('coproprietaire_inbox');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_message.html.twig', array(
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
                return $this->redirectToRoute('coproprietaire_corbeille');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_message_from_corbeille.html.twig', array(
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
                return $this->redirectToRoute('coproprietaire_messages_envoyes');
            }
            return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_message_from_envoyes.html.twig', array(
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }
        $this->addFlash('info', "Ce Message n'existe pas !");
        return $this->redirectToRoute('coproprietaire_inbox');
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/corbeille.html.twig',
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findInboxMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/inbox.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findSendMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/messages_envoyes.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findDeletedMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/corbeille.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/corbeille.html.twig',
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
            return $this->redirectToRoute('coproprietaire_inbox');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/inbox.html.twig',
            ['formSend' => $form->createView()]);
    }

    public function deleteMessageCorbeilleAction(Request $request, Message $message)
    {
        if ($message !== null && $message->getIsSupprime()==true ) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
            $this->addFlash('info', 'Le Message a été définitivement supprimé.');
            return $this->redirectToRoute('coproprietaire_corbeille');
        }
        $this->addFlash('info', "Ce Message n'existe pas !");
        return $this->redirectToRoute('coproprietaire_corbeille');
    }
}

