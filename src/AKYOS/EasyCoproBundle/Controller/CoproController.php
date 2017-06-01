<?php

namespace AKYOS\EasyCoproBundle\Controller;


use AKYOS\EasyCoproBundle\AKYOSEasyCoproBundle;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Form\CoproprieteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoproController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Copro/index.html.twig');
    }

    public function listAction(){

        $em = $this->getDoctrine()->getManager();
        $copros = $em->getRepository(Copropriete::class)->findAll();
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_copropriete.html.twig',
            ['coproprietes'=>$copros]);
    }

    public function createAction(Request $request){
        $copro = new Copropriete();
        $form = $this->createForm(CoproprieteType::class, $copro);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($copro);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Votre copropriété a bien été ajoutée.');
            return $this->redirectToRoute('akyos_easy_copro_backoffice_syndic_list_copropriete');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_copropriete.html.twig',
            ['my_form'=>$form->createView()]);
    }

    public function showAction(){

    }
}