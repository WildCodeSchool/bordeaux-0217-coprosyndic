<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{

    public function contactAction(Request $request)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Formulaire reception')
            ->setFrom('send@example.com')
            ->setTo('wcs.coprosyndic@gmail.com')
            ->setBody($this->renderView(
                '@AKYOSEasyCopro/Emails/contact.html.twig', array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'message' => $_POST['message']
            )),'text/html'
            )
        ;

        $this->get('mailer')->send($message);
        $request->getSession()->getFlashBag()->add('notice', 'Votre message a bien été envoyée.');
        return $this->redirectToRoute('akyos_easy_copro_homepage');
    }

}
