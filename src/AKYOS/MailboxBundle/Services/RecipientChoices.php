<?php

namespace AKYOS\MailboxBundle\Services;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use Symfony\Component\DependencyInjection\ContainerInterface;

class RecipientChoices
{
    private $container;
    private $type;
    private $userAccount;
    private $choices;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $em = $this->container->get('doctrine')->getManager();
        $this->type = $user->getType();
        if ($this->type == 'admin') {
            $this->choices = array('mail.new.choices.union' => 'syndic', 'mail.new.choices.coowner' => 'coproprietaire', 'mail.new.choices.tenant' => 'locataire', 'mail.new.choices.provider' => 'artisan');
        } elseif ($this->type == 'syndic') {
            $this->userAccount = $em->getRepository(Syndic::class)->findOneByUser($user);
            $this->choices = array('mail.new.choices.coowner' => 'coproprietaire','mail.new.choices.tenant' => 'locataire','mail.new.choices.provider' => 'artisan');
        } elseif ($this->type == 'coproprietaire') {
            $this->userAccount = $em->getRepository(Coproprietaire::class)->findOneByUser($user);
            $this->choices = array('mail.new.choices.union' => 'syndic', 'mail.new.choices.coowner' => 'coproprietaire','mail.new.choices.tenant' => 'locataire','mail.new.choices.provider' => 'artisan');
        } elseif ($this->type == 'locataire') {
            $this->userAccount = $em->getRepository(Locataire::class)->findOneByUser($user);
            $this->choices = array('mail.new.choices.union' => 'syndic', 'mail.new.choices.coowner' => 'coproprietaire','mail.new.choices.tenant' => 'locataire','mail.new.choices.provider' => 'artisan');
        } elseif ($this->type == 'artisan') {
            $this->userAccount = $em->getRepository(Artisan::class)->findOneByUser($user);
            $this->choices = array('mail.new.choices.union' => 'syndic', 'mail.new.choices.coowner' => 'coproprietaire','mail.new.choices.tenant' => 'locataire');
        } else {
            $this->userAccount = null;
            $this->choices = null;
        }
    }

    public function getChoices()
    {
        return $this->choices;
    }

    public function getUserAccount()
    {
        return $this->userAccount;
    }

    public function getType()
    {
        return $this->type;
    }
}