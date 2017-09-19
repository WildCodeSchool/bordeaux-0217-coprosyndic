<?php

namespace AKYOS\DocumentBundle\Controller;

use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\DocumentBundle\Entity\Categorie;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\DocumentBundle\Form\CreateDocumentType;
use AKYOS\DocumentBundle\Form\EditDocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentController extends Controller
{
    public function indexAction(Request $request)
    {
        $em              = $this->getDoctrine()->getManager();
        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCount($this->getUser());
        $allDocuments    = $em->getRepository(Document::class)->findDocumentsByUser($this->getUser());

        $request->getSession()->set('copro', null);

        return $this->render('AKYOSDocumentBundle::index.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documents'       => $allDocuments,
        ));
    }

    public function createAction(Request $request)
    {
        $em       = $this->getDoctrine()->getManager();
        $syndic   = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $document = new Document();
        $form     = $this->createForm(CreateDocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $document->setSyndic($syndic);
            $em->persist($document);
            $em->flush();

            $this->addFlash('info', 'Un nouveau document a été importé avec succès.');
            return $this->redirectToRoute('document_show', array(
                'id'   => $document->getId(),
                'type' => $this->getUser()->getType(),
            ));
        }

        return $this->render('AKYOSDocumentBundle::create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction(Document $document)
    {
        return $this->render('AKYOSDocumentBundle::show.html.twig', array(
            'document' => $document
        ));
    }

    public function editAction(Request $request, Document $document)
    {
        $form = $this->createForm(EditDocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $document->setDateModif(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('info', 'Les modifications sur le document ont bien été enregistrées.');

            return $this->redirectToRoute('document_show', array(
                'id'   => $document->getId(),
                'type' => $this->getUser()->getType(),
            ));
        }

        return $this->render('AKYOSDocumentBundle::edit.html.twig', array(
            'form'       => $form->createView(),
            'documentId' => $document->getId(),
        ));
    }

    public function deleteAction(Request $request, Document $document)
    {
        if ($document !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($document);
            $em->flush();

            $this->addFlash('info', 'Le document a bien été supprimé.');
            return $this->redirectToRoute('document_index', array('type' => $this->getUser()->getType()));
        }
        $this->addFlash('info', 'Le document n\'existe pas.');

        return $this->redirectToRoute('document_index', array('type' => $this->getUser()->getType()));
    }
}
