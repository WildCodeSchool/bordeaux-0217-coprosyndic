<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Form\CreateArtisanType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArtisanController extends Controller
{

    public function indexAction(){

        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository(Artisan::class)->findOneByUser($this->getUser());
        $form = $this->createForm(CreateArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('artisan_show');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}