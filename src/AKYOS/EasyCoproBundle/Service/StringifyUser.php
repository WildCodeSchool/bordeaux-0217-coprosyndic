<?php

namespace AKYOS\EasyCoproBundle\Service;

use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StringifyUser
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function stringify(User $user) {
        $em = $this->container->get('doctrine')->getManager();
        $result ='';

        if ($user->getType() == 'SYNDIC') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
            $result = $syndic->getNom();
        } elseif ($user->getType() == 'COPRO') {
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $result = $coproprietaire->getNom().' '.$coproprietaire->getPrenom();
        } elseif ($user->getType() == 'LOC') {
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
            $result = $locataire->getNom().' '.$locataire->getPrenom();
        } elseif ($user->getType() == 'ARTISAN') {
            $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);
            $result = $artisan->getRaisonSociale();
        }

        return $result;
    }
}