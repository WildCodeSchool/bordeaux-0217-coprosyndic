<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Form\ArtisanType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArtisanController extends Controller
{

    public function indexAction(){

        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/index.html.twig');
    }

    public function registerAction(Request $request)
    {
        // 1) build the form
        $art = new Artisan();
        $artisan = $this->createForm(ArtisanType::class, $art);

        // 2) handle the submit (will only happen on POST)
        $artisan->handleRequest($request);
        if ($artisan->isSubmitted() && $artisan->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)

            // 4) save the User!
            $em=$this->getDoctrine()->getManager();
            $em->persist($art);
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoArtisan', 'Le compte ARTISAN a été créé avec Succès.');
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_index');
        }

        return $this->render(
        '@AKYOSEasyCopro/BackOffice/Syndic/addArtisan.html.twig',
            array('artisan' => $artisan->createView())
        );
    }

    public function listArtisanAction()
    {
        $em = $this->getDoctrine()->getManager();
        $artisans = $em->getRepository(Artisan::class)
            ->findAll();
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/listArtisan.html.twig', array(
            'artisans' => $artisans,
        ));
    }

    public function showArtisanAction(Artisan $artisan)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Artisan/showArtisan.html.twig', array(
            'artisan' => $artisan,
        ));
    }
}