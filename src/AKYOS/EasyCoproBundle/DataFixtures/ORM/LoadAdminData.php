<?php

namespace AKYOS\EasyCoproBundle\DataFixtures\ORM;

use AKYOS\EasyCoproBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadAdminData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $admin =
            [
                "username" => "akyos",
                "password" => "1234",
                "email" => "akyos@akyos.com",
                "type" => "SUPERADMIN",
            ];

        $newUser = new User();
        $encoder = $this->container->get('security.password_encoder');

        $newUser
            ->setUsername($admin["username"])
            ->setPassword($encoder->encodePassword($newUser, $admin["password"]))
            ->setEmail($admin["email"])
            ->setType($admin["type"])
            ->setEnabled(true);

        $manager->persist($newUser);
        $manager->flush();
    }
}
