<?php
class Zf1Test extends Zend_Test_PHPUnit_ControllerTestCase
{
    public function setUp()
    {
        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
    }

    public function testIndexActionShouldContainLoginForm()
    {
        $this->dispatch('/');
        $this->assertAction('index');
        $this->assertResponseCode(200);
        $this->assertQueryContentContains('h1','Hello World!');
    }
}
