<?php

namespace AKYOS\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontofficeController extends Controller
{

    public function indexAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('user_connection');
        }
        return $this->render('AKYOSFrontofficeBundle::index.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('AKYOSFrontofficeBundle::mentions.html.twig');
    }

    public function contactAction()
    {
        $message = \Swift_Message::newInstance()
                                 ->setSubject('Formulaire reception')
                                 ->setFrom('send@example.com')
                                 ->setTo('wcs.coprosyndic@gmail.com')
                                 ->setBody($this->renderView(
                                     'AKYOSFrontofficeBundle::contact_email.html.twig', array(
                                     'name'    => $_POST['name'],
                                     'email'   => $_POST['email'],
                                     'tel'     => $_POST['tel'],
                                     'message' => $_POST['message']
                                 )), 'text/html'
                                 );

        $this->get('mailer')->send($message);
        $this->addFlash('info', 'Votre message a bien été envoyée.');

        return $this->redirectToRoute('frontoffice_homepage');
    }

}
