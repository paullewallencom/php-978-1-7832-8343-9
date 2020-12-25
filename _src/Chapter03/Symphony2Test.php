<?php
namespace Application\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Symphony2Test extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful());

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Hello World!")')->count()
        );
    }
}
