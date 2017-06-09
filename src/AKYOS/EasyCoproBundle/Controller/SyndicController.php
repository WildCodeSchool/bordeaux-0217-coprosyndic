<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\CreateArtisanType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\CreateLocataireType;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SyndicController extends Controller
{

    ##################################SYNDIC##################################
    ##########################################################################
    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $form = $this->createForm(CreateSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show', array('id' => $syndic->getId()));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show.html.twig', array(
            'syndic' => $syndic
        ));
    }
    ##################################ARTISAN#################################
    ##########################################################################
    public function createArtisanAction(Request $request)
    {
        $artisan = new Artisan();

        $form = $this->createForm(CreateArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $artisan->getUser()->setEnabled(true)->setType('ARTISAN');
            $artisan->getUser()->addRole('ROLE_ARTISAN');
            $em = $this->getDoctrine()->getManager();
            $em->persist($artisan);
            $em->flush();

            //TODO : Modifier le message flash
            $request->getSession()->getFlashBag()->add('info', 'Le compte ARTISAN a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_artisan',
                array('id' => $artisan->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function listArtisanAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $artisans = $syndic->getArtisans();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_artisans.html.twig', array(
            'artisans' => $artisans,
        ));
    }

    public function showArtisanAction(Artisan $artisan)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_artisan.html.twig', array(
            'artisan' => $artisan,
        ));
    }

    public function editArtisanAction(Request $request, Artisan $artisan)
    {
        $form = $this->createForm(CreateArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte ARTISAN a bien été modifié.');

            return $this->redirectToRoute('syndic_show_artisan', array(
                'id' => $artisan->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteArtisanAction(Request $request, Artisan $artisan)
    {
        if ($artisan !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artisan);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte ARTISAN a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_artisans');
        }
        $request->getSession()->getFlashBag()->add('info', "Ce compte ARTISAN n'existe pas !");

        return $this->redirectToRoute('syndic_list_artisans');
    }

    ##############################COPROPRIETAIRE##############################
    ##########################################################################
    public function createCoproprietaireAction(Request $request)
    {
        $coproprietaire = new Coproprietaire();

        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coproprietaire->getUser()->setEnabled(true)->setType('COPRO');
            $coproprietaire->getUser()->addRole('ROLE_COPRO');
            $em = $this->getDoctrine()->getManager();
            $em->persist($coproprietaire);
            $em->flush();

            //TODO : Modifier le message flash
            $request->getSession()->getFlashBag()->add('info', 'Le compte COPROPRIETAIRE a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_coproprietaire',
                array('id' => $coproprietaire->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_coproprietaire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte COPROPRIETAIRE a bien été modifié.');

            return $this->redirectToRoute('syndic_show_coproprietaire', array(
                'id' => $coproprietaire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        if ($coproprietaire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coproprietaire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte COPROPRIETAIRE a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_coproprietaire');
        }
        $request->getSession()->getFlashBag()->add('info', "Ce compte COPROPRIETAIRE n'existe pas !");

        return $this->redirectToRoute('syndic_list_coproprietaire');
    }

    public function showCoproprietaireAction(Coproprietaire $coproprietaire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_coproprietaire.html.twig', array(
            'coproprietaire' => $coproprietaire,
        ));
    }

    public function listCoproprietaireAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietaires = $syndic->getCoproprietaires();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietaires.html.twig', array(
            'coproprietaires' => $coproprietaires,
        ));
    }

    ################################LOCATAIRE#################################
    ##########################################################################
    public function createLocataireAction(Request $request)
    {
        $locataire = new Locataire();

        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $locataire->getUser()->setEnabled(true)->setType('LOC');
            $locataire->getUser()->addRole('ROLE_LOC');
            $em = $this->getDoctrine()->getManager();
            $em->persist($locataire);
            $em->flush();

            //TODO : Modifier le message flash
            $request->getSession()->getFlashBag()->add('info', 'Le compte LOCATAIRE a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_locataire',
                array('id' => $locataire->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteLocataireAction(Request $request, Locataire $locataire)
    {
        if ($locataire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($locataire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte LOCATAIRE a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_locataires');
        }
        $request->getSession()->getFlashBag()->add('info', "Ce compte LOCATAIRE n'existe pas !");

        return $this->redirectToRoute('syndic_list_locataires');
    }

    public function showLocataireAction(Locataire $locataire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_locataire.html.twig', array(
            'locataire' => $locataire,
        ));
    }

    public function listLocataireAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $locataires = $syndic->getLocataires();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_locataires.html.twig', array(
            'locataires' => $locataires,
        ));
    }

    public function editLocataireAction(Request $request, Locataire $locataire)
    {
        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte LOCATAIRE a bien été modifié.');

            return $this->redirectToRoute('syndic_show_locataire', array(
                'id' => $locataire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    ###############################COPROPRIETE################################
    ##########################################################################
    public function createCoproprieteAction(Request $request)
    {
      //TO DO
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_copropriete.html.twig');
    }

    public function listCoproprietesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietes = $syndic->getCoproprietes();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietes.html.twig', array(
            'coproprietes' => $coproprietes,
        ));
    }

}