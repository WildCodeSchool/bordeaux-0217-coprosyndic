<?php

namespace AKYOS\EasyCoproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/index.html.twig');
    }

    public function createSyndicAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/create_syndic.html.twig');
    }

}