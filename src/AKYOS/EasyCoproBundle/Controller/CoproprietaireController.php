<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Form\CreateCoproprietaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AKYOS\EasyCoproBundle\Entity\Document;

class CoproprietaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('coproprietaire_show', array('id' => $coproprietaire->getId()));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show.html.twig', array(
            'coproprietaire' => $coproprietaire
        ));
    }

    public function showDocumentAction(Document $document)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/show_document.html.twig', array(
            'document' => $document
        ));
    }

    public function gestionDocumentsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($this->getUser());
        $lot = $coproprietaire->getLot();

        $categoriesCount = $em->getRepository(Document::class)->findCategoriesCountByLot($lot);
        $allDocuments = $em->getRepository(Document::class)->findLotDocumentsSortedByDate($lot);

        return $this->render('@AKYOSEasyCopro/BackOffice/Coproprietaire/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }
}

