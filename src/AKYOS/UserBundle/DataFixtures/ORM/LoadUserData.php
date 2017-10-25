<?php

namespace AKYOS\BackofficeBundle\DataFixtures\ORM;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Coproprietaire;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use AKYOS\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $newUser = new User();
        $encoder = $this->container->get('security.password_encoder');
        $newUser
            ->setUsername('akyos')
            ->setPassword($encoder->encodePassword($newUser, '1234'))
            ->setEmail('akyos@akyos.fr')
            ->setType('ADMIN')
            ->setEnabled(true)
            ->addRole('ROLE_ADMIN')
        ;

        $manager->persist($newUser);
        $manager->flush();

        $syndics = $manager->getRepository(Syndic::class)->findAll();
        $syndicCount = 1;
        foreach ($syndics as $syndic) {
            $newUser = new User();
            $encoder = $this->container->get('security.password_encoder');
            $newUser
                ->setUsername('syndic'.$syndicCount)
                ->setPassword($encoder->encodePassword($newUser, '1234'))
                ->setEmail($syndic->getEmailBureau())
                ->setType('SYNDIC')
                ->setEnabled(true)
                ->addRole('ROLE_SYNDIC')
            ;

            $syndic
                ->setUser($newUser);

            $manager->persist($newUser);
            $manager->flush();
            $syndicCount++;
        }

        $coproprietaires = $manager->getRepository(Coproprietaire::class)->findAll();
        $coproCount = 1;
        foreach ($coproprietaires as $coproprietaire) {
            $newUser = new User();
            $encoder = $this->container->get('security.password_encoder');
            $newUser
                ->setUsername('copro'.$coproCount)
                ->setPassword($encoder->encodePassword($newUser, '1234'))
                ->setEmail($coproprietaire->getEmail())
                ->setType('COPRO')
                ->setEnabled(true)
                ->addRole('ROLE_COPRO')
            ;

            $coproprietaire
                ->setUser($newUser);

            $manager->persist($newUser);
            $manager->flush();
            $coproCount++;
        }

        $locataires = $manager->getRepository(Locataire::class)->findAll();
        $locatCount = 1;
        foreach ($locataires as $locataire) {
            $newUser = new User();
            $encoder = $this->container->get('security.password_encoder');
            $newUser
                ->setUsername('locat'.$locatCount)
                ->setPassword($encoder->encodePassword($newUser, '1234'))
                ->setEmail($locataire->getEmail())
                ->setType('LOC')
                ->setEnabled(true)
                ->addRole('ROLE_LOC')
            ;

            $locataire
                ->setUser($newUser);

            $manager->persist($newUser);
            $manager->flush();
            $locatCount++;
        }

        $artisans = $manager->getRepository(Artisan::class)->findAll();
        $artisanCount = 1;
        foreach ($artisans as $artisan) {
            $newUser = new User();
            $encoder = $this->container->get('security.password_encoder');
            $newUser
                ->setUsername('artisan'.$artisanCount)
                ->setPassword($encoder->encodePassword($newUser, '1234'))
                ->setEmail($artisan->getEmailBureau())
                ->setType('ARTISAN')
                ->setEnabled(true)
                ->addRole('ROLE_ARTISAN')
            ;

            $artisan
                ->setUser($newUser);

            $manager->persist($newUser);
            $manager->flush();
            $artisanCount++;
        }
    }
}