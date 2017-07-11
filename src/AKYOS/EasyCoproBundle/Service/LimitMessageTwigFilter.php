<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LimitMessageTwigFilter extends \Twig_Extension
{

    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('limitMessage',
            array($this, 'limitMessageLength'))];
    }

    public function limitMessageLength($message)
    {
        $maxLength = strlen($message) < 50 ? strlen($message) : 50;
        $messageReduit = '';

        for($i = 0; $i < $maxLength; $i++) {
            $messageReduit .= $message[$i];
        }
        $messageReduit .= ' ...';

        return $messageReduit;
    }
}
