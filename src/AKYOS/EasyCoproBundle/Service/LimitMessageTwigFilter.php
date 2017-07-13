<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LimitMessageTwigFilter extends \Twig_Extension
{

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('limitMessage', array($this, 'limitMessageLength')),
            new \Twig_SimpleFilter('limitObject', array($this, 'limitObjectLength'))
        ];
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

    public function limitObjectLength($object)
    {
        $maxLength = strlen($object) < 40 ? strlen($object) : 40;
        $objectReduit = '';

        for($i = 0; $i < $maxLength; $i++) {
            $objectReduit .= $object[$i];
        }
        $objectReduit .= ' ...';

        return $objectReduit;
    }
}
