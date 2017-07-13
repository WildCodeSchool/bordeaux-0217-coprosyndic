<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
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
            new \Twig_SimpleFilter('limitMessage', array($this, 'limitMessageLength')),
            new \Twig_SimpleFilter('limitObject', array($this, 'limitObjectLength')),
            new \Twig_SimpleFilter('telNumber', array($this, 'formatTelNumber')),
            new \Twig_SimpleFilter('compteRebours', array($this, 'formatCompteRebours')),
            new \Twig_SimpleFilter('actuelCoproprietaire', array($this, 'getActuelCoproprietaire')),
        ];
    }

    public function limitMessageLength($message)
    {
        $maxLength = 50;
        if (strlen($message) > $maxLength - 4) {
            $message = substr($message,0, $maxLength - 4).' ...';
        }
        return $message;
    }

    public function limitObjectLength($object)
    {
        $maxLength = 40;
        if (strlen($object) > $maxLength - 4) {
            $object = substr($object,0, $maxLength - 4).' ...';
        }
        return $object;
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

    public function formatCompteRebours($date)
    {
        $rebours = '';
        $int = date_diff(new \DateTime(), $date);

        if ($int->y > 0) {
            $rebours .= $int->y > 1 ? $int->y . " ans": $int->y . " an";
        } elseif ($int->m > 0) {
            $rebours .= $int->m  . " mois";
        } elseif ($int->d > 0) {
            $rebours .= $int->d > 1 ? $int->d . " jours": $int->d . " jour";
        } elseif ($int->h > 0) {
            $rebours .= $int->h > 1 ? $int->h . " heures" : $int->h . " heure";
        } elseif ($int->i > 0) {
            $rebours .= $int->i > 1 ? $int->i . " minutes" : $int->i . " minute";
        } elseif ($int->s > 0) {
            $rebours .= $int->s > 1 ? $int->s . " secondes" : $int->s . " seconde";
        }

        return  $rebours;
    }

    public function getActuelCoproprietaire($lot)
    {
        $em = $this->container->get('doctrine')->getManager();
        $coproprietaire = $em->getRepository(Coproprietaire::class)->findActuelCoproprietaire($lot);

        return $coproprietaire;
    }
}
