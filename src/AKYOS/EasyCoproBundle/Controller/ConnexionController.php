<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionController extends Controller
{
    public function indexAction()
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            $user = $this->get('security.token_storage')->getToken()->getUser();
            if($user->getType() == 'SYNDIC'){
                return $this->redirectToRoute('akyos_easy_copro_backend_syndic_index');
            }

            $user = $this->get('security.token_storage')->getToken()->getUser();
            if($user->getType() == 'COPRO'){
                return $this->redirectToRoute('akyos_easy_copro_backend_copro_index');
            }

            $user = $this->get('security.token_storage')->getToken()->getUser();
            if($user->getType() == 'LOCATAIRE'){
                return $this->redirectToRoute('akyos_easy_copro_backend_locataire_index');
            }

            $user = $this->get('security.token_storage')->getToken()->getUser();
            if($user->getType() == 'ARTISAN'){
                return $this->redirectToRoute('akyos_easy_copro_backend_artisan_index');
            }

            $user = $this->get('security.token_storage')->getToken()->getUser();
            if($user->getType() == 'SUPERADMIN'){
                return $this->redirectToRoute('akyos_easy_copro_backend_admin_index');
            }

        }



        return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');


    }




}
