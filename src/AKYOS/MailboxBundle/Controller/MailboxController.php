<?php

namespace AKYOS\MailboxBundle\Controller;

use AKYOS\MailboxBundle\Entity\Mail;
use AKYOS\MailboxBundle\Form\MailType;
use AKYOS\MailboxBundle\Form\ReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class MailboxController extends Controller
{
    public function indexAction()
    {
        $mails = $this->getDoctrine()->getManager()->getRepository(Mail::class)
            ->findAllReceivedMails($this->getUser());

        return $this->render('AKYOSMailboxBundle:Mailbox:index.html.twig', array(
            'mails' => $mails,
        ));
    }

    public function showAction(Mail $mail)
    {
        if ($this->getUser() == $mail->getRecipient())
        {
            $mail->setRead(true);
            $em = $this->getDoctrine()->getManager();
            $em->flush();

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

    public function filterAction(Request $request, $category)
    {
        if ($request->isXmlHttpRequest())
        {
            $repo = $this->getDoctrine()->getManager()->getRepository(Mail::class);
            $mails = [];
            switch ($category) {
                case 'inbox':
                    $mails = $repo->findAllReceivedMails($this->getUser());
                    break;
                case 'favorites':
                    break;
                case 'important':
                    break;
                case 'sent':
                    $mails = $repo->findSentMails($this->getUser());
                    break;
                case 'spam':
                    break;
                case 'trash':
                    $mails = $repo->findDeletedMails($this->getUser());
                    break;
                default:
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
}
