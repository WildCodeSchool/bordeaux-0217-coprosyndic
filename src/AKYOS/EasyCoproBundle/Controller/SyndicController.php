<?php

namespace AKYOS\EasyCoproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SyndicController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function newArtisanAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/newArtisan.html.twig');
    }

    public function newCoproAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/newCopro.html.twig');
    }

    public function newLocataireAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/newLocataire.html.twig');
    }
}