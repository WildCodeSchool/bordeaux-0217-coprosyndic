<?php

namespace AKYOS\BackofficeBundle\Service;

use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TwigFilters extends \Twig_Extension
{
    private $container;

    public function __construct(ContainerInterface$container)
    {
        $this->container = $container;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('telNumber', array($this, 'formatTelNumber')),
            new \Twig_SimpleFilter('actuelCoproprietaire', array($this, 'getActuelCoproprietaire')),
        ];
    }

    public function formatTelNumber($number)
    {
        $formattedNumber = '';
        for ($i=strlen($number)-1; $i>0; $i-=2)
        {
            $formattedNumber = $number[$i-1] . $number[$i] . ' ' . $formattedNumber;
        }

        return $formattedNumber;
    }

    public function getActuelCoproprietaire($lot)
    {
        $em = $this->container->get('doctrine')->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findActuelCoproprietaire($lot);

        return $coproprietaire;
    }
}
