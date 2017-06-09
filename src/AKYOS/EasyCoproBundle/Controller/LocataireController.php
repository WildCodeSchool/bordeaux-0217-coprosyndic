<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Locataire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocataireController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('locataire_show', array('id' => $locataire->getId()));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction(Locataire $locataire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show.html.twig', array(
            'locataire' => $locataire,
        ));
    }
}