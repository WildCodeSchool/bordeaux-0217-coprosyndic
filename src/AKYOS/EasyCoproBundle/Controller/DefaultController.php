<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:mentions.html.twig');
    }

    public function SubmitFormAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Formulaire reception')
            ->setFrom('send@example.com')
            ->setTo('wcs.coprosyndic@gmail.com')
            ->setBody($this->renderView(
                '@AKYOSEasyCopro/Emails/formulaire.html.twig', array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'message' => $_POST['message']
            )),'text/html'
            )
        ;

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('akyos_easy_copro_homepage');
    }

}
