<?php

namespace AKYOS\FrontofficeBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontofficeController extends Controller
{

    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $em   = $this->getDoctrine()->getManager();

            if ($user->getType() == 'syndic') {
                $syndic = $em->getRepository(Syndic::class)->findByUser($user);
                $request->getSession()->set('user_account', $syndic);
                return $this->redirectToRoute('syndic_index');
            }

            if ($user->getType() == 'coproprietaire') {
                $coproprietaire = $em->getRepository(Coproprietaire::class)->findByUser($user);
                $request->getSession()->set('user_account', $coproprietaire);
                return $this->redirectToRoute('coproprietaire_index');
            }

            if ($user->getType() == 'locataire') {
                $locataire = $em->getRepository(Locataire::class)->findByUser($user);
                $request->getSession()->set('user_account', $locataire);
                return $this->redirectToRoute('locataire_index');
            }

            if ($user->getType() == 'artisan') {
                $artisan = $em->getRepository(Artisan::class)->findByUser($user);
                $request->getSession()->set('user_account', $artisan);
                return $this->redirectToRoute('artisan_index');
            }

            if ($user->getType() == 'admin') {
                return $this->redirectToRoute('admin_index');
            }
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
