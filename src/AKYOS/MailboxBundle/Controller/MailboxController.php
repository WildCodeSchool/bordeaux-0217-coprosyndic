<?php

namespace AKYOS\MailboxBundle\Controller;

use AKYOS\MailboxBundle\Entity\Mail;
use AKYOS\MailboxBundle\Form\MailType;
use AKYOS\MailboxBundle\Form\ReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class MailboxController extends Controller
{
    public function indexAction()
    {
        $limit = 3;
        $mails = $this->getDoctrine()->getManager()->getRepository(Mail::class)
            ->findReceivedMailsByState($this->getUser(), 'inbox', 1, $limit);

        return $this->render('AKYOSMailboxBundle:Mailbox:index.html.twig', array(
            'mails' => $mails,
            'page' => 1,
        ));
    }

    public function showAction(Mail $mail)
    {
        if ($this->getUser() == $mail->getRecipient())
        {
            if (!$mail->getRead()) {
                $mail->setRead(true);
                $em = $this->getDoctrine()->getManager();
                $em->flush();
            }

            $sender = $this->get('akyos.mailbox.stringify_user')->stringify($mail->getSender());

            return $this->render('AKYOSMailboxBundle:Mailbox:show.html.twig', array(
                'mail' => $mail,
                'sender' => $sender,
            ));

        }
        elseif ($this->getUser() == $mail->getSender())
        {
            $recipient = $this->get('akyos.mailbox.stringify_user')->stringify($mail->getRecipient());

            return $this->render('AKYOSMailboxBundle:Mailbox:show.html.twig', array(
                'mail' => $mail,
                'recipient' => $recipient,
            ));
        }
        else
        {
            return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
        }
    }

    public function newAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm(MailType::class, $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mail
                ->setSendingDate(new \DateTime())
                ->setSender($this->getUser())
                ->setRecipientType($mail->getRecipient()->getType())
            ;

            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
        }

        return $this->render('AKYOSMailboxBundle:Mailbox:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function replyAction(Request $request, Mail $mail)
    {
        $reply = new Mail();
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reply
                ->setSendingDate(new \DateTime())
                ->setSender($this->getUser())
                ->setRecipientType($mail->getSender()->getType())
                ->setRecipient($mail->getSender())
                ->setSubject('Re : '.$mail->getSubject())
            ;

            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();

            $this->addFlash('info', 'Votre réponse a été envoyée !');
            return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
        }

        return $this->render('@AKYOSMailbox/Mailbox/reply.html.twig', array(
            'form' => $form->createView(),
            'mailId' => $mail->getId(),
        ));
    }

    public function filterAction(Request $request, $state, $page = 1)
    {
        if ($request->isXmlHttpRequest())
        {
            $repo = $this->getDoctrine()->getManager()->getRepository(Mail::class);
            $limit = 3;
            switch ($state) {
                case 'sent':
                    $mails = $repo->findSentMails($this->getUser(), $page, $limit);
                    break;
                case 'trash':
                    $mails = $repo->findDeletedMails($this->getUser(), $page, $limit);
                    break;
                default:
                    $mails = $repo->findReceivedMailsByState($this->getUser(), $state, $page, $limit);
                    break;
            }

            $jsonMails = $this->get('akyos.mailbox.mail_serializer')->serialize($mails);
            $jsonUser = $this->get('akyos.mailbox.mail_serializer')->serialize($this->getUser());

            return new JsonResponse(array('data'=> $jsonMails, 'user'=> $jsonUser));
        }
        else {
            throw new HttpException('501', 'Invalid Call');
        }
    }

    public function changeStateAction(Request $request, $oldState, $newState)
    {
        $ids = $request->get('data');

        if ($ids != null && $oldState != $newState) {
            $em = $this->getDoctrine()->getManager();

            foreach ($ids as $id) {
                $mail = $em->getRepository(Mail::class)->find($id);
                if ($mail->getRecipient() == $this->getUser() && $newState != 'sent') {
                    $mail->setRecipientState($newState);
                } elseif ($mail->getSender() == $this->getUser() && $newState == 'trash') {
                    $mail->setSenderState($newState);
                }
            }
            $em->flush();

            return $this->filterAction($request, $oldState);
        }

        return new JsonResponse(array('data'=> null, 'user'=> null));
    }

    public function deleteAction(Mail $mail)
    {
        if ($mail !== null) {
            if ($this->getUser() == $mail->getRecipient() && $mail->getRecipientState() != 'trash') {
                $mail->setRecipientState('trash');
            } elseif ($this->getUser() == $mail->getSender() && $mail->getRecipientState() != 'trash') {
                $mail->setSenderState('trash');
            } else {
                return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('info', 'Le message a été placé dans la corbeille.');

            return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
        }

        return $this->redirectToRoute('mailbox_homepage', array('type' => $this->getUser()->getType()));
    }
}
