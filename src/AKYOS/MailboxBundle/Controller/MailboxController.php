<?php

namespace AKYOS\MailboxBundle\Controller;

use AKYOS\MailboxBundle\Entity\Mail;
use AKYOS\MailboxBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MailboxController extends Controller
{
    public function indexAction(Request $request)
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

        $mails = $this->getDoctrine()->getManager()->getRepository(Mail::class)
            ->findByRecipient($this->getUser());

        return $this->render('AKYOSMailboxBundle:Mailbox:index.html.twig', array(
            'form' => $form->createView(),
            'mails' => $mails,
        ));
    }
}
