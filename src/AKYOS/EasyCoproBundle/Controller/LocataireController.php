<?php

namespace AKYOS\EasyCoproBundle\Controller;


use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Form\LocataireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LocataireController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function registerAction(Request $request)
    {
        // 1) build the form
        $loc = new Locataire();
        $locataire = $this->createForm(LocataireType::class, $loc);

        // 2) handle the submit (will only happen on POST)
        $locataire->handleRequest($request);
        if ($locataire->isSubmitted() && $locataire->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($loc, $loc->getPlainPassword());
            $loc->setPassword($password);

            // 4) save the User!
            $em->persist($loc);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_addLocataire');
        }

        return $this->render(
            '@AKYOSEasyCopro/BackOffice/Syndic/addLocataire.html.twig',
            array('locataire' => $locataire->createView())
        );
    }
}