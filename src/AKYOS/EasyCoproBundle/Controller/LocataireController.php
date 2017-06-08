<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocataireController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/index.html.twig');
    }

}