<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CompteReboursTwigFilter extends \Twig_Extension
{

    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('compteRebours',
            array($this, 'formatCompteRebours'))];
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
}
