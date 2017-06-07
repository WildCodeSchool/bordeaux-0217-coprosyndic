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

            if($user->getType() == 'COPRO'){
                return $this->redirectToRoute('akyos_easy_copro_backend_copro_index');
            }

            if($user->getType() == 'LOC'){
                return $this->redirectToRoute('akyos_easy_copro_backend_locataire_index');
            }

            if($user->getType() == 'ARTISAN'){
                return $this->redirectToRoute('akyos_easy_copro_backend_artisan_index');
            }

            if($user->getType() == 'SUPERADMIN'){
                return $this->redirectToRoute('akyos_easy_copro_backend_admin_index');
            }
        }
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:index.html.twig');
    }
}
