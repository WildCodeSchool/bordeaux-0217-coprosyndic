<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TelNumberTwigFilter extends \Twig_Extension
{

    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('telNumber',
            array($this, 'formatTelNumber'))];
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
}
