<?php

namespace AKYOS\EasyCoproBundle\DataFixtures\ORM;

use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadSyndicData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $syndics =
            [
                [
                    "nom" => "Syndicat des Flots Bleus",
                    "statut" => "Abonnement annuel",
                    "siret" => "732 829 320 00074",
                    "adresse_princ" => "48 rue de la Poste",
                    "adresse_sec" => "Batiment B2",
                    "code_postal" => "33000",
                    "ville" => "Bordeaux",
                    "tel_bureau" => "0563635555",
                    "email_bureau" => "syndic@flotsbleus.com",
                    "contact_nom" => "Dupont",
                    "contact_prenom" => "François",
                    "contact_tel" => "0655334466",
                    "contact_email" => "dupont@flotsbleus.com",
                    "user_username" => "flotsbleus",
                    "user_password" => "1234",
                    "user_email" => "syndic@flotsbleus.com",
                    "user_type" => "SYNDIC",
                ],
                [
                    "nom" => "Syndicat du Lyonnais",
                    "statut" => "Abonnement annuel",
                    "siret" => "655 245 002 00065",
                    "adresse_princ" => "2 boulevard Miterrand",
                    "adresse_sec" => "Porte Droite",
                    "code_postal" => "31000",
                    "ville" => "Toulouse",
                    "tel_bureau" => "0511881188",
                    "email_bureau" => "syndic@lyonnais.com",
                    "contact_nom" => "Durand",
                    "contact_prenom" => "Pierre",
                    "contact_tel" => "0633996565",
                    "contact_email" => "durand@lyonnais.com",
                    "user_username" => "lyonnais",
                    "user_password" => "1234",
                    "user_email" => "syndic@lyonnais.com",
                    "user_type" => "SYNDIC",
                ],
                [
                    "nom" => "Syndicat 33",
                    "statut" => "Abonnement annuel",
                    "siret" => "123 321 058 00094",
                    "adresse_princ" => "154 place de la Libération",
                    "adresse_sec" => "3e étage",
                    "code_postal" => "33000",
                    "ville" => "Bordeaux",
                    "tel_bureau" => "0489562321",
                    "email_bureau" => "syndic@syndic33.com",
                    "contact_nom" => "Tournier",
                    "contact_prenom" => "Julie",
                    "contact_tel" => "0609084152",
                    "contact_email" => "tournier@syndic33.com",
                    "user_username" => "syndic33",
                    "user_password" => "1234",
                    "user_email" => "syndic@syndic33.com",
                    "user_type" => "SYNDIC",
                ],
            ];

        foreach ($syndics as $syndic) {

            $newUser = new User();

            $encoder = $this->container->get('security.password_encoder');

            $newUser
                ->setUsername($syndic["user_username"])
                ->setPassword($encoder->encodePassword($newUser, $syndic["user_password"]))
                ->setEmail($syndic["user_email"])
                ->setType($syndic["user_type"])
                ->setEnabled(true);

            $newSyndic = new Syndic();
            $newSyndic
                ->setNom($syndic["nom"])
                ->setStatut($syndic["statut"])
                ->setSiret($syndic["siret"])
                ->setAdressePrinc($syndic["adresse_princ"])
                ->setAdresseSec($syndic["adresse_sec"])
                ->setCodePostal($syndic["code_postal"])
                ->setVille($syndic["ville"])
                ->setTelephoneBureau($syndic["tel_bureau"])
                ->setEmailBureau($syndic["email_bureau"])
                ->setContactNom($syndic["contact_nom"])
                ->setContactPrenom($syndic["contact_prenom"])
                ->setContactTelephone($syndic["contact_tel"])
                ->setContactEmail($syndic["contact_email"])
                ->setUser($newUser);

            $manager->persist($newSyndic);
            $manager->flush();
        }
    }
}