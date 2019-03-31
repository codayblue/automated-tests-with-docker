<?php

namespace App\Tests\Controller;

use App\Controller\HomeController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{

    public function testHelloAction()
    {
        $client = static::createClient();

        $client->request('GET', '/hello');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Hello Message!', $client->getResponse()->getContent());
    }
}
