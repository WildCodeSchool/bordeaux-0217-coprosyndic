<?php

namespace AKYOS\EasyCoproBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConnexionControllerTest extends WebTestCase
{
    public function testVerif()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connexion');
    }

}
