<?php

namespace AKYOS\BackofficeBundle\Controller;

use AKYOS\DocumentBundle\Entity\Category;
use AKYOS\BackofficeBundle\Entity\Copropriete;
use AKYOS\BackofficeBundle\Entity\Lot;
use AKYOS\DocumentBundle\Entity\Document;
use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\BackofficeBundle\Form\CreateArtisanType;
use AKYOS\DocumentBundle\Form\CategoryType;
use AKYOS\BackofficeBundle\Form\CreateCoproprietaireType;
use AKYOS\BackofficeBundle\Form\CreateCoproprieteType;
use AKYOS\DocumentBundle\Form\DocumentType;
use AKYOS\BackofficeBundle\Form\CreateLocataireType;
use AKYOS\BackofficeBundle\Form\CreateLotType;
use AKYOS\BackofficeBundle\Form\EditLocataireType;
use AKYOS\BackofficeBundle\Form\EditArtisanType;
use AKYOS\DocumentBundle\Form\EditCategorieType;
use AKYOS\BackofficeBundle\Form\EditCoproprietaireType;
use AKYOS\BackofficeBundle\Form\EditCoproprieteType;
use AKYOS\DocumentBundle\Form\EditDocumentType;
use AKYOS\BackofficeBundle\Form\EditSyndicType;
use AKYOS\MailboxBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SyndicController extends Controller
{

    // ACTIONS LIEES AU COMPTE SYNDIC ACTUEL
    //--------------------------------------

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Syndic $syndic */
        $syndic               = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $nbre_coproprietaires = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesBySyndic($syndic);
        $nbre_locataires      = $em->getRepository(Locataire::class)->findNbrLocatairesBySyndic($syndic);
        $artisans             = $syndic->getArtisans();

        $documents      = $syndic->getDocuments();
        $coproprietes   = $syndic->getCoproprietes();
        $request->getSession()->set('copro', null);

        $allReceivedMailsCount    = $em->getRepository(Mail::class)->countAllReceivedMails($this->getUser());
        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Syndic/index.html.twig', array(
            'nbre_coproprietaires'     => $nbre_coproprietaires,
            'documents'                => $documents,
            'nbre_locataires'          => $nbre_locataires,
            'artisans'                 => $artisans,
            'coproprietes'             => $coproprietes,
            'syndic'                   => $syndic,
            'allReceivedMailsCount'    => $allReceivedMailsCount,
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function editAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $form   = $this->createForm(EditSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show');
        }
        return $this->render('@AKYOSBackoffice/Syndic/edit.html.twig', array(
            'form' => $form->createView(), 'syndic' => $syndic
        ));
    }

    public function showAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $allReceivedMailsCount    = $em->getRepository(Mail::class)->countAllReceivedMails($this->getUser());

        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/show.html.twig', array(
            'syndic' => $syndic,
            'allReceivedMailsCount' => $allReceivedMailsCount
        ));
    }

    public function menuAction()
    {

        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietes = $em->getRepository(Copropriete::class)->find3LastCoproprietesBySyndic($syndic);

        $unreadReceivedMailsCount = $em->getRepository(Mail::class)->countUnreadReceivedMails($this->getUser());

        return $this->render('@AKYOSBackoffice/Syndic/menu.html.twig', array(
            'coproprietes'             => $coproprietes,
            'unreadReceivedMailsCount' => $unreadReceivedMailsCount,
        ));
    }

    public function menuCoproprietesAction()
    {

        $em           = $this->getDoctrine()->getManager();
        $syndic       = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $coproprietes = $em->getRepository(Copropriete::class)->findBySyndic($syndic);

        return $this->render('@AKYOSBackoffice/Syndic/menuCoproprietes.html.twig', array(
            'coproprietes' => $coproprietes,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSBackoffice/Syndic/menuUser.html.twig');
    }

    public function parametersAction(Request $request)
    {
        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/parameters.html.twig');
    }

    // ACTIONS LIEES AUX COPROPRIETAIRES
    //----------------------------------

    public function createCoproprietaireAction(Request $request)
    {
        $coproprietaire = new Coproprietaire();
        $form           = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coproprietaire->getUser()->setType('COPRO');
            $coproprietaire->getUser()->addRole('ROLE_COPRO');
            if ($coproprietaire->getActuel()) {
                $lot = $coproprietaire->getLot();
                $lot->setOccupeAct(true);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($coproprietaire);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($coproprietaire->getUser());

//            $password = $_POST['akyos_BackofficeBundle_copro']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $coproprietaire, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_coproprietaire', array(
                'id' => $coproprietaire->getId(),
            ));
        }

        return $this->render('@AKYOSBackoffice/Syndic/create_coproprietaire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {

        $form = $this->createForm(EditCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_coproprietaire', array(
                'id' => $coproprietaire->getId(),
            ));
        }
        return $this->render('@AKYOSBackoffice/Syndic/edit_coproprietaire.html.twig', array(
            'form'             => $form->createView(),
            'coproprietaireId' => $coproprietaire->getId(),
        ));
    }

    public function showCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        $request->getSession()->set('copro', $coproprietaire->getLot()->getCopropriete());

        $em = $this->getDoctrine()->getManager();
        $allReceivedMailsCount    = $em->getRepository(Mail::class)->countAllReceivedMails($coproprietaire->getUser());

        return $this->render('@AKYOSBackoffice/Syndic/show_coproprietaire.html.twig', array(
            'coproprietaire' => $coproprietaire,
            'allReceivedMailsCount' => $allReceivedMailsCount
        ));
    }

    public function listCoproprietairesAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietaires = $em->getRepository(Coproprietaire::class)
                              ->findCoproprietairesBySyndic($syndic);

        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/list_coproprietaires.html.twig', array(
            'coproprietaires' => $coproprietaires, 'syndic' => $syndic
        ));
    }

    public function deleteCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        if ($coproprietaire !== null) {
            if ($coproprietaire->getActuel()) {
                $lot = $coproprietaire->getLot();
                $lot->setOccupeAct(false);
            }
            $em = $this->getDoctrine()->getManager();
            $em->remove($coproprietaire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_coproprietaires');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_coproprietaires');
    }


    // ACTIONS LIEES AUX LOCATAIRES
    //-----------------------------

    public function createLocataireAction(Request $request)
    {
        $locataire = new Locataire();

        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $locataire->getUser()->setType('LOC');
            $locataire->getUser()->addRole('ROLE_LOC');
            if ($locataire->getActuel()) {
                $lot = $locataire->getLot();
                $lot->setLoueAct(true);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($locataire);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($locataire->getUser());

//            $password = $_POST['akyos_BackofficeBundle_locataire']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $locataire, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_locataire',
                                          array('id' => $locataire->getId()));
        }

        return $this->render('@AKYOSBackoffice/Syndic/create_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editLocataireAction(Request $request, Locataire $locataire)
    {
        $form = $this->createForm(EditLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_locataire', array(
                'id' => $locataire->getId(),
            ));
        }
        return $this->render('@AKYOSBackoffice/Syndic/edit_locataire.html.twig', array(
            'form'        => $form->createView(),
            'locataireId' => $locataire->getId(),
        ));
    }

    public function showLocataireAction(Request $request, Locataire $locataire)
    {
        $request->getSession()->set('copro', $locataire->getLot()->getCopropriete());

        $em = $this->getDoctrine()->getManager();
        $allReceivedMailsCount = $em->getRepository(Mail::class)->countAllReceivedMails($locataire->getUser());

        return $this->render('@AKYOSBackoffice/Syndic/show_locataire.html.twig', array(
            'locataire' => $locataire,
            'allReceivedMailsCount' => $allReceivedMailsCount
        ));
    }

    public function listLocatairesAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $locataires = $em->getRepository(Locataire::class)
                         ->findLocatairesBySyndic($syndic);

        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/list_locataires.html.twig', array(
            'locataires' => $locataires,
        ));
    }

    public function deleteLocataireAction(Request $request, Locataire $locataire)
    {
        if ($locataire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($locataire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            $copropriete = $em->getRepository(Copropriete::class)->find($request->getSession()->get('copro'));
            return $this->redirectToRoute('syndic_show_copropriete', array(
                'id' => $copropriete->getId(),
            ));
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_locataires');
    }


    // ACTIONS LIEES AUX ARTISANS
    //---------------------------

    public function gestionArtisansAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $artisans = $syndic->getArtisans();

        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/gestion_artisans.html.twig', array(
            'artisans' => $artisans,
        ));
    }

    public function createArtisanAction(Request $request)
    {
        $artisan = new Artisan();

        $em           = $this->getDoctrine()->getManager();
        $syndic       = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $coproprietes = $em->getRepository(Copropriete::class)->findBySyndic($syndic);

        $form = $this->createForm(CreateArtisanType::class, $artisan, array(
            'coproprietes' => $coproprietes,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $artisan->getUser()->setType('ARTISAN');
            $artisan->getUser()->addRole('ROLE_ARTISAN');
            $artisan->setSyndic($syndic);
            $em = $this->getDoctrine()->getManager();
            $em->persist($artisan);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($artisan->getUser());

//            $password = $_POST['akyos_BackofficeBundle_artisan']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $artisan, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_artisan',
                                          array('id' => $artisan->getId()));
        }

        return $this->render('@AKYOSBackoffice/Syndic/create_artisan.html.twig', array(
            'form_add_artisan' => $form->createView(),
        ));
    }

    public function editArtisanAction(Request $request, Artisan $artisan)
    {
        $em           = $this->getDoctrine()->getManager();
        $syndic       = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $coproprietes = $em->getRepository(Copropriete::class)->findBySyndic($syndic);

        $form = $this->createForm(EditArtisanType::class, $artisan, array(
            'coproprietes' => $coproprietes,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_artisan', array(
                'id' => $artisan->getId(),
            ));
        }

        return $this->render('@AKYOSBackoffice/Syndic/edit_artisan.html.twig', array(
            'form_edit_artisan' => $form->createView(),
            'artisanId'         => $artisan->getId(),
        ));
    }

    public function showArtisanAction(Request $request, Artisan $artisan)
    {
        $request->getSession()->set('copro', $artisan->getCopropriete());

        return $this->render('@AKYOSBackoffice/Syndic/show_artisan.html.twig', array(
            'artisan' => $artisan,
        ));
    }

    public function deleteArtisanAction(Request $request, Artisan $artisan)
    {
        if ($artisan !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artisan);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('syndic_gestion_artisans');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_gestion_artisans');
    }


    // ACTIONS LIEES AUX COPROPRIETES
    //-------------------------------

    public function createCoproprieteAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $copropriete = new Copropriete();
        $form        = $this->createForm(CreateCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $copropriete->setSyndic($syndic);
            $copropriete->setDateCreation(new \DateTime());
            $em->persist($copropriete);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'La copropriété a été créé avec succès.');
            return $this->redirectToRoute('syndic_list_coproprietes');
        }
        return $this->render('@AKYOSBackoffice/Syndic/create_copropriete.html.twig',
                             ['my_form' => $form->createView()]);
    }

    public function editCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $form = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('syndic_show_copropriete', array(
                'id' => $copropriete->getId(),
            ));
        }

        return $this->render('@AKYOSBackoffice/Syndic/edit_copropriete.html.twig',
                             [
                                 'my_form'       => $form->createView(),
                                 'coproprieteId' => $copropriete->getId(),
                             ]);
    }

    public function showCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $request->getSession()->set('copro', $copropriete);

        $em              = $this->getDoctrine()->getManager();
        $coproprietaires = $em->getRepository(Coproprietaire::class)->findCoproprietairesByCopropriete($copropriete);

        $syndic               = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $nbre_coproprietaires = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesBySyndicByCopropriete($syndic, $copropriete);
        $lots                 = $copropriete->getLots();
        $artisans             = $copropriete->getArtisans();
        $locataires           = $em->getRepository(Locataire::class)->findLocatairesByCopropriete($copropriete);
        $documents            = $em->getRepository(Document::class)->findByCopropriete($copropriete);

        return $this->render('@AKYOSBackoffice/Syndic/show_copropriete.html.twig', array(
            'copropriete'          => $copropriete,
            'nbre_coproprietaires' => $nbre_coproprietaires,
            'coproprietaires'      => $coproprietaires,
            'artisans'             => $artisans,
            'documents'            => $documents,
            'lots'                 => $lots,
            'locataires'           => $locataires,
        ));
    }

    public function listCoproprietesAction(Request $request)
    {
        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietes = $syndic->getCoproprietes();
        $counts       = [];

        foreach ($coproprietes as $copropriete) {
            $nb_documents       = count($copropriete->getDocuments());
            $nb_coproprietaires = $em->getRepository(Coproprietaire::class)
                                     ->findNbrCoproprietairesBySyndicByCopropriete($syndic, $copropriete);

            $counts[] = [
                'nbDocuments'       => $nb_documents,
                'nbCoproprietaires' => $nb_coproprietaires,
            ];
        }

        $request->getSession()->set('copro', null);

        return $this->render('@AKYOSBackoffice/Syndic/list_coproprietes.html.twig', array(
            'coproprietes' => $coproprietes,
            'counts'       => $counts,
        ));
    }

    public function deleteCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($copropriete);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'La copropriété a bien été supprimée.');

        return $this->redirectToRoute('syndic_list_coproprietes');
    }

    // ACTIONS LIEES AUX LOTS
    //-----------------------

    public function createLotAction(Request $request)
    {
        $lot  = new Lot();
        $form = $this->createForm(CreateLotType::class, $lot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em          = $this->getDoctrine()->getManager();
            $copropriete = $em->getRepository(Copropriete::class)->find($request->getSession()->get('copro')->getId()); // on recupere dans la bdd la copropriete qui correspond a la copropriete contenue dans la variable de session
            $lot->setCopropriete($copropriete); // on affecte au lot la copropriete
            $em->persist($lot);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Le lot a été crée avec succès.');
            return $this->redirectToRoute('syndic_show_copropriete', array(
                'id' => $lot->getCopropriete()->getId(),

            ));
        }
        return $this->render('@AKYOSBackoffice/Syndic/create_lot.html.twig',
                             ['form' => $form->createView()]);
    }

    public function editLotAction(Request $request, Lot $lot)
    {
        $form = $this->createForm(CreateLotType::class, $lot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le lot ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_list_lots');
        }

        return $this->render('@AKYOSBackoffice/Syndic/edit_lot.html.twig',
                             ['my_form' => $form->createView()]);
    }

    public function showLotAction(Lot $lot)
    {
        return $this->render('@AKYOSBackoffice/Syndic/show_lot.html.twig',
                             ['lot' => $lot]);
    }

    public function listLotsAction()
    {
//        $em = $this->getDoctrine()->getManager();
//
//        //TODO : à modifier (sélection par liste déroulante ?)
//        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
//        $copropriete = $em->getRepository(Copropriete::class)->find($id);
//        $lots = $copropriete->getLots();
//        $coproprietes = $em->getRepository(Copropriete::class)->findAll();
//
//        return $this->render('@AKYOSBackoffice/Syndic/list_lots.html.twig',
//            ['lots' => $lots, 'coproprietes' => $coproprietes]);
    }

    public function deleteLotAction(Request $request, Lot $lot)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($lot);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'Le lot a bien été supprimé.');
        $copropriete = $em->getRepository(Copropriete::class)->find($request->getSession()->get('copro'));
        return $this->redirectToRoute('syndic_show_copropriete', array(
            'id' => $copropriete->getId(),
        ));
    }

    // ACTIONS LIEES A LA RECHERCHE
    //-----------------------------

    public function searchAction(Request $request)
    {

        $search = $request->get('top-search');

        $em     = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $documents       = $em->getRepository(Document::class)->findBySyndicBySearch($syndic, $search);
        $lots            = $em->getRepository(Lot::class)->findSyndicLotsBySearch($syndic, $search);
        $coproprietaires = $em->getRepository(Coproprietaire::class)->findSyndicCoproprietairesBySearch($syndic, $search);
        $locataires      = $em->getRepository(Locataire::class)->findSyndicLocatairesBySearch($syndic, $search);
        $artisans        = $em->getRepository(Artisan::class)->findSyndicArtisansBySearch($syndic, $search);

        return $this->render('@AKYOSBackoffice/Syndic/search.html.twig', array(
            'recherche'       => $search,
            'documents'       => $documents,
            'lots'            => $lots,
            'coproprietaires' => $coproprietaires,
            'locataires'      => $locataires,
            'artisans'        => $artisans,
        ));

    }
}
