<?php

namespace AKYOS\EasyCoproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SyndicController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function addArtisanAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/addArtisan.html.twig');
    }

    public function addCoproAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/addCopro.html.twig');
    }

    public function addLocataireAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/addLocataire.html.twig');
    }

    public function addLotAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/addLot.html.twig');
    }

    public function addCoproprieteAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/addCopropriete.html.twig');
    }

    public function editArtisanAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editArtisan.html.twig');
    }

    public function editCoproAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editCopro.html.twig');
    }

    public function editLocataireAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editLocataire.html.twig');
    }

    public function editLotAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editLot.html.twig');
    }

    public function editCoproprieteAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editCopropriete.html.twig');
    }
}