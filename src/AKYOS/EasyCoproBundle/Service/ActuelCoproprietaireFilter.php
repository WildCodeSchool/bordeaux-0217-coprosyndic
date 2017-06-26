<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ActuelCoproprietaireFilter extends \Twig_Extension
{
    private $container;

    public function __construct(ContainerInterface$container)
    {
        $this->container = $container;
    }

    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('actuelCoproprietaire',
            array($this, 'getActuelCoproprietaire'))];
    }

    public function getActuelCoproprietaire($lot)
    {
        $em = $this->container->get('doctrine')->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findActuelCoproprietaire($lot);

        return $coproprietaire;
    }
}
