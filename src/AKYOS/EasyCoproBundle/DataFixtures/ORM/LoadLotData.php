<?php

namespace AKYOS\EasyCoproBundle\DataFixtures\ORM;

use AKYOS\EasyCoproBundle\Entity\Lot;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadLotData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $lots =
            [
                [
                    "identifiant" => "B150",
                    "type" => "appartement",
                    "quote_part" => "33",
                    "loue_act" => true,
                ],
                [
                    "identifiant" => "C025",
                    "type" => "cave",
                    "quote_part" => "5",
                    "loue_act" => false,
                ],
            ];

        foreach ($lots as $lot) {

            $newLot = new Lot();
            $newLot
                ->setIdentifiant($lot["identifiant"])
                ->setType($lot["type"])
                ->setQuotePart($lot["quote_part"])
                ->setLoueAct($lot["loue_act"])
            ;

            $manager->persist($newLot);
            $manager->flush();
        }
    }
}