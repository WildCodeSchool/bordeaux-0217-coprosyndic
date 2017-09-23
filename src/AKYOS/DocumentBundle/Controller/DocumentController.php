<?php

namespace AKYOS\DocumentBundle\Controller;

use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\DocumentBundle\Entity\Category;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\DocumentBundle\Form\DocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentController extends Controller
{
    public function indexAction(Request $request)
    {
        $em              = $this->getDoctrine()->getManager();
        $categoriesCount = $em->getRepository(Category::class)->countByCategorieByUser($this->getUser());
        $documents       = $em->getRepository(Document::class)->findAllByUser($this->getUser());

        $request->getSession()->set('copro', null);

        return $this->render('AKYOSDocumentBundle:Document:index.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documents'       => $documents,
        ));
    }

    public function createAction(Request $request)
    {
        $em       = $this->getDoctrine()->getManager();
        $syndic   = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $document = new Document();
        $form     = $this->createForm(DocumentType::class, $document, array(
            'syndic' => $syndic,
        ));
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

        return $this->render('AKYOSDocumentBundle:Document:create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction(Document $document)
    {
        return $this->render('AKYOSDocumentBundle:Document:show.html.twig', array(
            'document' => $document
        ));
    }

    public function editAction(Request $request, Document $document)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $form   = $this->createForm(DocumentType::class, $document, array(
            'syndic' => $syndic,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('info', 'Les modifications sur le document ont bien été enregistrées.');

            return $this->redirectToRoute('document_show', array(
                'id'   => $document->getId(),
                'type' => $this->getUser()->getType(),
            ));
        }

        return $this->render('AKYOSDocumentBundle:Document:edit.html.twig', array(
            'form'     => $form->createView(),
            'document' => $document,
        ));
    }

    public function deleteAction(Document $document)
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
