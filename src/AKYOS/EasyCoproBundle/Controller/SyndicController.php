<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Lot;
use AKYOS\EasyCoproBundle\Entity\Document;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\CreateArtisanType;
use AKYOS\EasyCoproBundle\Form\CreateCategorieType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprieteType;
use AKYOS\EasyCoproBundle\Form\CreateDocumentType;
use AKYOS\EasyCoproBundle\Form\CreateLocataireType;
use AKYOS\EasyCoproBundle\Form\CreateLotType;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use AKYOS\EasyCoproBundle\Form\EditArtisanType;
use AKYOS\EasyCoproBundle\Form\EditCategorieType;
use AKYOS\EasyCoproBundle\Form\EditCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\EditDocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SyndicController extends Controller
{

    // ACTIONS LIEES AU COMPTE SYNDIC ACTUEL
    //--------------------------------------

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //Requete Coproprietaire Repository
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $nbre_coproprietaires = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesBySyndic($syndic);
        //Requete Locataire Repository
        $nbre_locataires = $em->getRepository(Locataire::class)->findNbrLocatairesBySyndic($syndic);
        $artisans = $syndic->getArtisans();
        //Requete Document
        $documents = $syndic->getDocuments();
        $coproprietes = $syndic->getCoproprietes();
        //Requete Document Repository
        $nbre_documents = $em->getRepository(Document::class)->findNbreDocumentByCoproprieteBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig', array(
            'nbre_coproprietaires' => $nbre_coproprietaires,
            'documents' => $documents,
            'nbre_locataires' => $nbre_locataires,
            'artisans' => $artisans,
            'coproprietes' => $coproprietes,
            'nbre_documents' => $nbre_documents,
        ));
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

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

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
            'syndic' => $syndic,

        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $coproprietes = $em->getRepository(Copropriete::class)->find3LastCoproprietesBySyndic($syndic);


        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/menu.html.twig', array(
            'coproprietes'=> $coproprietes,
        ));
    }

    // ACTIONS LIEES AUX COPROPRIETAIRES
    //----------------------------------

    public function createCoproprietaireAction(Request $request)
    {
        $coproprietaire = new Coproprietaire();
        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
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

//            $confirmService = $this->get('akyos.confirm_registration');
//            $confirmService->confirm($coproprietaire->getUser());

//            $password = $_POST['akyos_easycoprobundle_copro']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $coproprietaire, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_coproprietaire', array(
                'id' => $coproprietaire->getId(),
            ));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_coproprietaire.html.twig', array(
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
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_coproprietaire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showCoproprietaireAction(Coproprietaire $coproprietaire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_coproprietaire.html.twig', array(
            'coproprietaire' => $coproprietaire,
        ));
    }

    public function listCoproprietairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietaires = $em->getRepository(Coproprietaire::class)
            ->findCoproprietairesBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietaires.html.twig', array(
            'coproprietaires' => $coproprietaires,
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
            $em = $this->getDoctrine()->getManager();
            $em->persist($locataire);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($locataire->getUser());

            $password = $_POST['akyos_easycoprobundle_locataire']['user']['plainPassword']['first'];
            $documentService = $this->get('akyos.generate_document');
            $documentService->generateRegistrationDocument($this->getUser(), $locataire, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_locataire',
                array('id' => $locataire->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editLocataireAction(Request $request, Locataire $locataire)
    {
        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_locataire', array(
                'id' => $locataire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showLocataireAction(Locataire $locataire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_locataire.html.twig', array(
            'locataire' => $locataire,
        ));
    }

    public function listLocatairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $locataires = $em->getRepository(Locataire::class)
            ->findLocatairesBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_locataires.html.twig', array(
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

            return $this->redirectToRoute('syndic_list_locataires');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_locataires');
    }


    // ACTIONS LIEES AUX ARTISANS
    //---------------------------

    public function gestionArtisansAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $artisans = $syndic->getArtisans();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/gestion_artisans.html.twig', array(
            'artisans' => $artisans,
        ));
    }

    public function createArtisanAction(Request $request)
    {
        $artisan = new Artisan();

        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
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

//            $password = $_POST['akyos_easycoprobundle_artisan']['user']['plainPassword']['first'];
//            $documentService = $this->get('akyos.generate_document');
//            $documentService->generateRegistrationDocument($this->getUser(), $artisan, $password);

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_artisan',
                array('id' => $artisan->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_artisan.html.twig', array(
            'form_add_artisan' => $form->createView(),
        ));
    }

    public function editArtisanAction(Request $request, Artisan $artisan)
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
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

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_artisan.html.twig', array(
            'form_edit_artisan' => $form->createView(),
            'artisanId' => $artisan->getId(),
        ));
    }

    public function showArtisanAction(Artisan $artisan)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_artisan.html.twig', array(
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
        $copro = new Copropriete();
        $form = $this->createForm(CreateCoproprieteType::class, $copro);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($copro);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'La copropriété a été créé avec succès.');
            return $this->redirectToRoute('syndic_list_coproprietes');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_copropriete.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function editCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $form = $this->createForm(CreateCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('syndic_list_coproprietes');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_copropriete.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function showCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $request->getSession()->set('copro', $copropriete);

        $em = $this->getDoctrine()->getManager();
        $coproprietaires = $em->getRepository(Coproprietaire::class)->findCoproprietairesByCopropriete($copropriete);
        //Requete Coproprietaire Repository
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $nbre_coproprietaires = $em->getRepository(Coproprietaire::class)->findNbrCoproprietairesBySyndicByCopropriete($syndic, $copropriete);

        $artisans = $syndic->getArtisans();

        //Requete Document Repository
        $documents = $em->getRepository(Document::class)->findDocumentsByCopropriete($copropriete);
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_copropriete.html.twig',
            ['copropriete' => $copropriete,
             'nbre_coproprietaires' =>$nbre_coproprietaires,
             'coproprietaires' =>$coproprietaires,
             'artisans' =>$artisans,
             'documents'=>$documents,

            ]);
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
        $lot = new Lot();
        $form = $this->createForm(CreateLotType::class, $lot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lot);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Le lot a été crée avec succès.');
            return $this->redirectToRoute('syndic_list_lots');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_lot.html.twig',
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

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_lot.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function showLotAction(Lot $lot)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_lot.html.twig',
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
//        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_lots.html.twig',
//            ['lots' => $lots, 'coproprietes' => $coproprietes]);
    }

    public function deleteLotAction(Request $request, Lot $lot)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($lot);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'Le lot a bien été supprimé.');

        return $this->redirectToRoute('syndic_list_lots');
    }

    // ACTIONS LIEES AUX DOCUMENTS
    //----------------------------

    public function gestionDocumentsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCountBySyndic($syndic);
        $allDocuments = $em->getRepository(Document::class)->findSyndicDocumentsSortedByDate($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }

    public function createDocumentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $document = new Document();
        $form_document = $this->createForm(CreateDocumentType::class, $document);
        $form_document->handleRequest($request);

        if ($form_document->isSubmitted() && $form_document->isValid()) {
            $document->setSyndic($syndic);
            $em->persist($document);
            $em->flush();

            $this->addFlash('info', 'Un nouveau document a été importé avec succès.');
            return $this->redirectToRoute('syndic_show_document',
                array('id' => $document->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_document.html.twig', array(
            'form_document' => $form_document->createView(),
        ));
    }

    public function editDocumentAction(Request $request, Document $document)
    {
        $form = $this->createForm(EditDocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le document ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_document', array(
                'id' => $document->getId(),
            ));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_document.html.twig', array(
            'form_edit_document' => $form->createView(),
            'documentId' => $document->getId(),
        ));
    }

    public function showDocumentAction(Document $document)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_document.html.twig', array(
            'document' => $document
        ));
    }

    public function deleteDocumentAction(Request $request, Document $document)
    {
        if ($document !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($document);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le document a bien été supprimé.');
            return $this->redirectToRoute('syndic_gestion_documents');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le document n\'existe pas.');

        return $this->redirectToRoute('syndic_gestion_documents');
    }

    // ACTIONS LIEES AUX CATEGORIES
    //-----------------------------

    public function gestionCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $categories = $em->getRepository(Categorie::class)->findBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/gestion_categories.html.twig', array(
            'categories' => $categories,
        ));
    }

    public function createCategorieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $categorie = new Categorie();
        $form = $this->createForm(CreateCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setSyndic($syndic);
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('info', 'Une nouvelle catégorie a été créée avec succès.');
            return $this->redirectToRoute('syndic_gestion_categories');
        }

        return $this->render('AKYOSEasyCoproBundle:BackOffice/Syndic:create_categorie.html.twig', array(
            'form_add_categorie' => $form->createView(),
        ));
    }

    public function editCategorieAction(Request $request, Categorie $categorie)
    {
        $form = $this->createForm(EditCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la catégorie ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_gestion_categories');
        }

        return $this->render('AKYOSEasyCoproBundle:BackOffice/Syndic:edit_categorie.html.twig', array(
            'form_edit_categorie' => $form->createView(),
            'categorieId' => $categorie->getId(),
        ));
    }

    public function deleteCategorieAction(Request $request, Categorie $categorie)
    {
        if ($categorie !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'La catégorie a bien été supprimé.');
            return $this->redirectToRoute('syndic_gestion_categories');
        }
        $request->getSession()->getFlashBag()->add('info', 'La catégorie n\'existe pas.');

        return $this->redirectToRoute('syndic_gestion_categories');
    }

    // ACTIONS REQUETES AJAX
    //----------------------

    public function listCategorieDocumentsAction(Request $request, $categorieId) {

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
            if ($categorieId == 'all') {
                $documents = $em->getRepository(Document::class)->findAllDocumentsBySyndic($syndic);
            } else {
                $categorie = $em->getRepository(Categorie::class)->find($categorieId);
                $documents = $em->getRepository(Document::class)->findDocumentsByCategorie($categorie);
            }
            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $serializer = new Serializer(array($normalizer), array($encoder));

            $jsonDocuments = $serializer->serialize($documents, 'json');

            return new JsonResponse(array(
                'data'=> $jsonDocuments
            ));
        }
        throw new HttpException('501', 'Invalid Call');
    }

}