<?php

namespace AKYOS\DocumentBundle\Service;

use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Lot;
use Doctrine\ORM\EntityManager;

class TwigFilters extends \Twig_Extension
{
    /** @var  EntityManager */
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('actuelCoproprietaire', array($this, 'getActuelCoproprietaire')),
        ];
    }

    public function getActuelCoproprietaire(Lot $lot)
    {
        $coproprietaire = $this->em->getRepository(Coproprietaire::class)->findActuelByLot($lot);

        return $coproprietaire;
    }
}
