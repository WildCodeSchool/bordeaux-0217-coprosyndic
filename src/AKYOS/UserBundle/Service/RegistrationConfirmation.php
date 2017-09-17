<?php

namespace AKYOS\UserBundle\Service;

use AKYOS\UserBundle\Entity\User;
use FOS\UserBundle\Mailer\MailerInterface;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegistrationConfirmation
{
    private $mailer;
    private $tokenGenerator;
    private $router;
    private $session;
    private $container;

    public function __construct(MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator, UrlGeneratorInterface $router, SessionInterface $session, ContainerInterface $container)
    {
        $this->mailer         = $mailer;
        $this->tokenGenerator = $tokenGenerator;
        $this->router         = $router;
        $this->session        = $session;
        $this->container      = $container;
    }

    public function confirm(User $user)
    {

        $user->setEnabled(false);
        if (null === $user->getConfirmationToken()) {
            $user->setConfirmationToken($this->tokenGenerator->generateToken());
        }

        $em = $this->container->get('doctrine')->getManager();
        $em->persist($user);
        $em->flush();

        $this->mailer->sendConfirmationEmailMessage($user);

        $this->session->set('fos_user_send_confirmation_email/email', $user->getEmail());
    }
}