<?php

namespace AKYOS\EasyCoproBundle\Controller;


use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Form\CoproType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class CoproController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Copro/index.html.twig');
    }

    public function registerAction(Request $request)
    {
        // 1) build the form
        $cop = new Coproprietaire();
        $copro = $this->createForm(CoproType::class, $cop);

        // 2) handle the submit (will only happen on POST)
        $copro->handleRequest($request);
        if ($copro->isSubmitted() && $copro->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)

            // 4) save the User!
            $em=$this->getDoctrine()->getManager();
            $em->persist($cop);
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoCopro', 'Le compte COPROPRIETAIRE a été créé avec Succès.');
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_index');
        }

        return $this->render(
            '@AKYOSEasyCopro/BackOffice/Syndic/addCopro.html.twig',
            array('copro' => $copro->createView())
        );
    }
}
