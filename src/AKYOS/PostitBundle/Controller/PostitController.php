<?php

namespace AKYOS\PostitBundle\Controller;

use AKYOS\PostitBundle\Entity\Postit;
use AKYOS\PostitBundle\Form\PostitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostitController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postits = $em->getRepository(Postit::class)->findByUser($this->getUser());

        return $this->render('AKYOSPostitBundle::index.html.twig', array(
            'postits' => $postits,
        ));
    }

    public function newAction(Request $request)
    {
        $postit = new Postit();
        $form   = $this->createForm(PostitType::class, $postit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $postit->setUser($this->getUser());

            $em->persist($postit);
            $em->flush();

            $type  = $this->getUser()->getType();
            $route = $type . '_index';

            return $this->redirectToRoute($route);
        }
        return $this->render('AKYOSPostitBundle::new.html.twig', array(
            'postit' => $postit,
            'form'   => $form->createView(),
        ));
    }

    public function showAction(Postit $postit)
    {
        return $this->render('AKYOSPostitBundle::show.html.twig', array(
            'postit' => $postit,
        ));
    }

    public function editAction(Request $request, Postit $postit)
    {
        $editForm = $this->createForm(PostitType::class, $postit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('postit_edit', array('id' => $postit->getId()));
        }

        return $this->render('AKYOSPostitBundle::edit.html.twig', array(
            'postit'    => $postit,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Postit $postit)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($postit);
        $em->flush();

        $type  = $this->getUser()->getType();
        $route = $type.'_index';

        return $this->redirectToRoute($route);
    }

}
