<?php

namespace AKYOS\EasyCoproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoproprietaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/index.html.twig');
    }

}
