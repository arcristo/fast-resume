<?php

namespace FastResume\Tests\Controller;

use Silex\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testGetHomepage()
    {
        $client = $this->createClient();
        $client->followRedirects(true);
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertContains('FAST RESUME', $crawler->filter('div.content h1')->text());
    }

    public function createApplication()
    {
        $app = require APP_PATH . '/app.php';
        require APP_PATH . '/config/dev.php';
        require APP_PATH . '/controllers.php';
        $app['session.test'] = true;

        return $this->app = $app;
    }
}
