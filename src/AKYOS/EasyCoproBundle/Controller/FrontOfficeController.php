<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontOfficeController extends Controller
{
    public function redirectToProfileAction()
    {
        $user = $this->getUser();
        $userType= $user->getType();
        if ($userType=='SYNDIC')
            return $this->redirectToRoute('syndic_show');
        elseif ($userType=='LOC')
            return $this->redirectToRoute('locataire_show');
        elseif ($userType=='ARTISAN')
            return $this->redirectToRoute('artisan_show');
        elseif ($userType=='SUPERADMIN')
            return $this->redirectToRoute('admin_index');
        else
            return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');
    }

    public function redirectToParametersAction()
    {
        $user = $this->getUser();
        $userType= $user->getType();
        if ($userType=='SYNDIC')
            return $this->redirectToRoute('syndic_parameters');
        elseif ($userType=='LOC')
            return $this->redirectToRoute('locataire_parameters');
        elseif ($userType=='ARTISAN')
            return $this->redirectToRoute('artisan_parameters');
        elseif ($userType=='SUPERADMIN')
            return $this->redirectToRoute('admin_index');
        else
            return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');
    }

    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            if($user->getType() == 'SYNDIC'){
                $syndic = $em->getRepository(Syndic::class)->findByUser($user);
                $request->getSession()->set('user_account', $syndic);
                return $this->redirectToRoute('syndic_index');
            }

            if($user->getType() == 'COPRO'){
                $coproprietaire = $em->getRepository(Coproprietaire::class)->findByUser($user);
                $request->getSession()->set('user_account', $coproprietaire);
                return $this->redirectToRoute('coproprietaire_index');
            }

            if($user->getType() == 'LOC'){
                $locataire = $em->getRepository(Locataire::class)->findByUser($user);
                $request->getSession()->set('user_account', $locataire);
                return $this->redirectToRoute('locataire_index');
            }

            if($user->getType() == 'ARTISAN'){
                $artisan = $em->getRepository(Artisan::class)->findByUser($user);
                $request->getSession()->set('user_account', $artisan);
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
