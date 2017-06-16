<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontOfficeController extends Controller
{
    public function indexAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            $user = $this->get('security.token_storage')->getToken()->getUser();

            if($user->getType() == 'SYNDIC'){
                return $this->redirectToRoute('syndic_index');
            }

            if($user->getType() == 'COPRO'){
                return $this->redirectToRoute('coproprietaire_index');
            }

            if($user->getType() == 'LOC'){
                return $this->redirectToRoute('locataire_index');
            }

            if($user->getType() == 'ARTISAN'){
                return $this->redirectToRoute('artisan_index');
            }

            if($user->getType() == 'ADMIN'){
                return $this->redirectToRoute('admin_index');
            }
        }
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:mentions.html.twig');
    }

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
        $request->getSession()->getFlashBag()->add('info', 'Votre message a bien été envoyée.');

        return $this->redirectToRoute('homepage');
    }

}
