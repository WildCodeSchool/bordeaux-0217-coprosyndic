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

        $postits = $em->getRepository('AKYOSEasyCoproBundle:Postit')->findByUser($this->getUser()); //on recupere tous les postits de l'utilisateur en cours

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
            $postit->setUser($this->getUser());//attribuer l'utilisateur en cours au postit creer

            $em->persist($postit);
            $em->flush();

            $type = $this->getUser()->getType();
            $route = '';

        if($type=='COPRO'){
            $route = 'coproprietaire_index';
        }
        elseif($type=='SYNDIC'){
            $route = 'syndic_index';
        }
        elseif($type=='LOC'){
            $route = 'locataire_index';
        }
        elseif($type=='ARTISAN'){
            $route = 'artisan_index';
        }
            return $this->redirectToRoute($route, array('id' => $postit->getId()));
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
        $type = $this->getUser()->getType();
        $route='';
        if($type=='COPRO'){
            $route = 'coproprietaire_index';
        }
        elseif($type=='SYNDIC'){
            $route = 'syndic_index';
        }
        elseif($type=='LOC'){
            $route = 'locataire_index';
        }
        elseif($type=='ARTISAN'){
            $route = 'artisan_index';
        }
        return $this->redirectToRoute($route);
    }


}
