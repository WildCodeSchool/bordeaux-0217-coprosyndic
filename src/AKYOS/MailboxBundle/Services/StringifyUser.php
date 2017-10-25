<?php

namespace AKYOS\MailboxBundle\Services;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StringifyUser
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function stringify(User $user)
    {
        $em = $this->container->get('doctrine')->getManager();
        $result ='';

        if ($user->getType() == 'syndic') {
            $syndic = $em->getRepository(Syndic::class)->findOneByUser($user);
            $result = $syndic->getNom();
        } elseif ($user->getType() == 'coproprietaire') {
            $coproprietaire = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $result = $coproprietaire->getPrenom().' '.$coproprietaire->getNom();
        } elseif ($user->getType() == 'locataire') {
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($user);
            $result = $locataire->getPrenom().' '.$locataire->getNom();
        } elseif ($user->getType() == 'artisan') {
            $artisan = $em->getRepository(Artisan::class)->findOneByUser($user);
            $result = $artisan->getRaisonSociale();
        }

        return $result;
    }
}