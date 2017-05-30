<?php

namespace AKYOS\EasyCoproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocataireController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }
}