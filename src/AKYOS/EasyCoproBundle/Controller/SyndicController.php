<?php

namespace AKYOS\EasyCoproBundle\Controller;


use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\ArtisanType;
use AKYOS\EasyCoproBundle\Form\CoproType;
use AKYOS\EasyCoproBundle\Form\LocataireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class SyndicController extends Controller
{

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function editArtisanAction(Request $request, Artisan $artisan)
    {
        $form = $this->createForm(ArtisanType::class, $artisan);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoArtisan', 'Le compte ARTISAN a bien été modifié.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_showArtisan', array(
                'id' => $artisan->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editCopro.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editCoproAction(Request $request, Coproprietaire $coproprietaire)
    {
        $form = $this->createForm(CoproType::class, $coproprietaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoCopro', 'Le compte COPROPRIETAIRE a bien été modifié.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_showCopro', array(
                'id' => $coproprietaire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editCopro.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editLocataireAction(Request $request, Locataire $locataire)
    {
        $form = $this->createForm(LocataireType::class, $locataire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoLoc', 'Le compte LOCATAIRE a bien été modifié.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_showLocataire', array(
                'id' => $locataire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/editLocataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteLocataireAction(Request $request, Locataire $locataire)
    {
        if ($locataire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($locataire);
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoLoc', 'Le compte LOCATAIRE a bien été supprimé.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listLocataire');
        }
        $request->getSession()->getFlashBag()->add('infoLoc', "Ce compte LOCATAIRE n'existe pas !");
        return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listLocataire');
    }

    public function deleteArtisanAction(Request $request, Artisan $artisan)
    {
        if ($artisan !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artisan);
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoArtisan', 'Le compte ARTISAN a bien été supprimé.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listArtisan');
        }
        $request->getSession()->getFlashBag()->add('infoArtisan', "Ce compte ARTISAN n'existe pas !");
        return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listArtisan');
    }

    public function deleteCoproAction(Request $request, Coproprietaire $copro)
    {
        if ($copro !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($copro);
            $em->flush();
            $request->getSession()->getFlashBag()->add('infoCopro', 'Le compte COPROPRIETAIRE a bien été supprimé.');
            return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listCopro');
        }
        $request->getSession()->getFlashBag()->add('infoCopro', "Ce compte COPROPRIETAIRE n'existe pas !");
        return $this->redirectToRoute('akyos_easy_copro_backend_syndic_listCopro');
    }

    public function listCoproprietesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        //var_dump($syndic);

        $coproprietes = $syndic->getCoproprietes();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietes.html.twig', array(
            'coproprietes' => $coproprietes,
        ));
    }

}