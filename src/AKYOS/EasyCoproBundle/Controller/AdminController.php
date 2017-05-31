<?php

namespace AKYOS\EasyCoproBundle\Controller;


use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\RegisterSyndicType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/index.html.twig');
    }

    public function createSyndicAction(Request $request)
    {
        $syndic = new Syndic();

        $form = $this->createForm(RegisterSyndicType::class, $syndic);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $syndic->getUser()->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($syndic);
            $em->flush();

            return $this->redirectToRoute('akyos_easy_copro_backend_admin_index');
        }


        return $this->render('@AKYOSEasyCopro/BackOffice/Admin/create_syndic.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}