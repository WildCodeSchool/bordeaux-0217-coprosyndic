<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function mentionsAction()
    {
        return $this->render('AKYOSEasyCoproBundle:FrontOffice:mentions.html.twig');
    }


}
