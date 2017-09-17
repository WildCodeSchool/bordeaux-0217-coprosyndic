<?php

namespace AKYOS\UserBundle\Service;

use AKYOS\BackofficeBundle\Entity\Categorie;
use AKYOS\BackofficeBundle\Entity\Document;
use AKYOS\BackofficeBundle\Entity\Lot;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GenerateDocument
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function generateRegistrationDocument(User $expediteurUser, $destinataire, $password)
    {
        $em = $this->container->get('doctrine')->getManager();

        $expediteurType = $expediteurUser->getType();
        if ($expediteurType == 'SYNDIC') {
            $expediteur = $em->getRepository(Syndic::class)
                ->findOneByUser($expediteurUser);
        } else {
            $expediteur = $expediteurUser;
        }

        $url = 'documents/'.uniqid('doc').'.pdf';

        $this->container->get('knp_snappy.pdf')->generateFromHtml(
            $this->container->get('templating')->render(
                'AKYOSUserBundle::registration_doc.html.twig', array(
                    'expediteur' => $expediteur,
                    'expediteurType' => $expediteurType,
                    'destinataire' => $destinataire,
                    'password' => $password,
                )
            ),
            'documents/'.uniqid('doc').'.pdf'
        );

        //TODO : sauvegarder le document en tant qu'objet Document et l'assigner au syndic et au nouveau compte
        //pour les test
        $mylot = $em->getRepository(Lot::class)
            ->find(540);
        $categorie = $em->getRepository(Categorie::class)
            ->find(1);


        $docTitre = 'Création compte ' . $destinataire->getUser()->getType() . ' pour l\'utilisateur' . $destinataire->getUser()->getUsername();
        $newDoc = new Document();
        $newDoc
            ->setTitre($docTitre)
            ->setDescription('Lettre de création de compte utilisateur.')
            ->setDateAjout(new \DateTime())
            ->setDateModif(new \DateTime())
            ->setConfidentialite(2)
            ->setUrl($url)
            ->setSyndic($expediteur)
            //TODO : modifier la liaison (faire ManyToMany Documents <-> User)
            ->addLot($destinataire->getLot())
            ->setCategorie($categorie)
        ;

        $em->persist($newDoc);
        $em->flush();

    }
}