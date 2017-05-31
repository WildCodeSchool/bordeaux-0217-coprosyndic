<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArtisanController extends Controller
{

    public function indexAction(){

        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/index.html.twig');
    }
}