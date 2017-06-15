<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Document;
use AKYOS\EasyCoproBundle\Form\CreateDocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Document/index.html.twig');
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $document = $em->getRepository(Document::class)->findOneById($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Document/show.html.twig', array(
            'document' => $document
        ));
    }
}
