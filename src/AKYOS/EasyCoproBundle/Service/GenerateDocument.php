<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GenerateDocument
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function generateRegistrationDocument(User $expediteur, $destinataire, $password)
    {
        $expediteurType = $expediteur->getType();
        if ($expediteurType == 'SYNDIC') {
            $expediteur = $this->container->get('doctrine')->getManager()->getRepository(Syndic::class)
                ->findOneByUser($expediteur);
        }

        $this->container->get('knp_snappy.pdf')->generateFromHtml(
            $this->container->get('templating')->render(
                '@AKYOSEasyCopro/BackOffice/Documents/doc_registration.html.twig', array(
                    'expediteur' => $expediteur,
                    'expediteurType' => $expediteurType,
                    'destinataire' => $destinataire,
                    'password' => $password,
                )
            ),
            'documents/'.uniqid('doc').'.pdf'
        );

        //TODO : sauvegarder le document en tant qu'objet Document et l'assigner au syndic et au nouveau compte
    }
}