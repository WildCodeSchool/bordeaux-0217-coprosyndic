<?php

namespace AKYOS\EasyCoproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoproController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Copro/index.html.twig');
    }


}