<?php

namespace AKYOS\DocumentBundle\Controller;

use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\DocumentBundle\Entity\Categorie;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\DocumentBundle\Form\CreateCategorieType;
use AKYOS\DocumentBundle\Form\EditCategorieType;
use SensioLabs\Security\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $categories = $em->getRepository(Categorie::class)->findBySyndic($syndic);

        return $this->render('AKYOSDocumentBundle:Category:index.html.twig', array(
            'categories' => $categories,
        ));
    }

    public function createAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $categorie = new Categorie();
        $form      = $this->createForm(CreateCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setSyndic($syndic);
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('info', 'Une nouvelle catégorie a été créée avec succès.');
            return $this->redirectToRoute('category_index', array('type' => $this->getUser()->getType()));
        }

        return $this->render('AKYOSDocumentBundle:Category:create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction(Request $request, Categorie $categorie)
    {
        $form = $this->createForm(EditCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('info', 'Les modifications sur la catégorie ont bien été enregistrées.');

            return $this->redirectToRoute('category_index', array('type' => $this->getUser()->getType()));
        }

        return $this->render('AKYOSDocumentBundle:Category:edit.html.twig', array(
            'form'        => $form->createView(),
            'categorieId' => $categorie->getId(),
        ));
    }

    public function deleteAction(Categorie $categorie)
    {
        if ($categorie !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();

            $this->addFlash('info', 'La catégorie a bien été supprimée.');

            return $this->redirectToRoute('category_index', array('type' => $this->getUser()->getType()));
        }
        $this->addFlash('info', 'La catégorie n\'existe pas.');

        return $this->redirectToRoute('category_index', array('type' => $this->getUser()->getType()));
    }

    public function getDocumentsByCategoryAction(Request $request, $categorieId)
    {
        if ($request->isXmlHttpRequest()) {
            $em        = $this->getDoctrine()->getManager();
            $documents = $em->getRepository(Document::class)->findDocumentsByCategorie($categorieId, $this->getUser());

            return new JsonResponse(array('documents' => json_encode($documents)));
        }
        throw new HttpException('501', 'Invalid Call');
    }
}
