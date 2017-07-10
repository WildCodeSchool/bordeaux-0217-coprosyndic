<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Postit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Postit controller.
 *
 */
class PostitController extends Controller
{
    /**
     * Lists all postit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postits = $em->getRepository('AKYOSEasyCoproBundle:Postit')->findAll();

        return $this->render('@AKYOSEasyCopro/BackOffice/postit/index.html.twig', array(
            'postits' => $postits,
        ));
    }

    /**
     * Creates a new postit entity.
     *
     */
    public function newAction(Request $request)
    {
        $postit = new Postit();
        $form = $this->createForm('AKYOS\EasyCoproBundle\Form\PostitType', $postit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($postit);
            $em->flush();

            return $this->redirectToRoute('coproprietaire_index', array('id' => $postit->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/postit/new.html.twig', array(
            'postit' => $postit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a postit entity.
     *
     */
    public function showAction(Postit $postit)
    {
        $deleteForm = $this->createDeleteForm($postit);

        return $this->render('@AKYOSEasyCopro/BackOffice/postit/show.html.twig', array(
            'postit' => $postit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing postit entity.
     *
     */
    public function editAction(Request $request, Postit $postit)
    {
        $deleteForm = $this->createDeleteForm($postit);
        $editForm = $this->createForm('AKYOS\EasyCoproBundle\Form\PostitType', $postit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('postit_edit', array('id' => $postit->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/postit/edit.html.twig', array(
            'postit' => $postit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a postit entity.
     *
     */
    public function deleteAction(Request $request, Postit $postit)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($postit);
            $em->flush();

        return $this->redirectToRoute('coproprietaire_index');
    }


}
