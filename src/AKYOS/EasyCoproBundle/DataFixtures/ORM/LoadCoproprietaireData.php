<?php

namespace AKYOS\EasyCoproBundle\DataFixtures\ORM;

use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints\Date;

class LoadCoproprietaireData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $copros =
            [
                [
                    "nom" => "Durand",
                    "prenom" => "Francis",
                    "telephone" => "0604020103",
                    "email" => "francis@durand.com",
                    "date_arrivee" => "16-02-2008",
                    "date_depart" => "16-02-2028",
                    "rib" => "19032 XXXX 00099XX99 5X",
                    "nb_enfants" => 3,
                    "membre_conseil" => true,
                    "actuel" => true,
                    "commentaire_syndic" => "Aucun souci",
                    "lot" => "B102",
                    "user_username" => "fdurand",
                    "user_password" => "1234",
                    "user_email" => "francis@durand.com",
                    "user_type" => "COPRO",
                ],
                [
                    "nom" => "Dupont",
                    "prenom" => "René",
                    "telephone" => "0611228899",
                    "email" => "rene@dupont.com",
                    "date_arrivee" => "30-11-1999",
                    "date_depart" => "22-04-2050",
                    "rib" => "19032 XXXX 00099XX99 5X",
                    "nb_enfants" => 0,
                    "membre_conseil" => false,
                    "actuel" => true,
                    "commentaire_syndic" => "Problèmes par le passé",
                    "lot" => "A250",
                    "user_username" => "rdupont",
                    "user_password" => "1234",
                    "user_email" => "rene@dupont.com",
                    "user_type" => "COPRO",
                ],
            ];

        foreach ($copros as $copro) {

            $newUser = new User();

            $encoder = $this->container->get('security.password_encoder');

            $newUser
                ->setUsername($copro["user_username"])
                ->setPassword($encoder->encodePassword($newUser, $copro["user_password"]))
                ->setEmail($copro["user_email"])
                ->setType($copro["user_type"])
                ->setEnabled(true)
                ->addRole('ROLE_COPRO')
            ;


            $newCopro = new Coproprietaire();
            $newCopro
                ->setNom($copro["nom"])
                ->setPrenom($copro["prenom"])
                ->setTelephone($copro["telephone"])
                ->setEmail($copro["email"])
                ->setDateArrivee(new \DateTime($copro["date_arrivee"]))
                ->setDateDepart(new \DateTime($copro["date_depart"]))
                ->setRib($copro["rib"])
                ->setNbEnfants($copro["nb_enfants"])
                ->setMembreConseil($copro["membre_conseil"])
                ->setActuel($copro["actuel"])
                ->setCommentSyndic($copro["commentaire_syndic"])
                //->setLot($copro["lot"])
                ->setUser($newUser);

            $manager->persist($newCopro);
            $manager->flush();
        }
    }
}