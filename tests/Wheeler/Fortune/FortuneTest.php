<?php

use Wheeler\Fortune\Fortune;
use Wheeler\Fortune\Storage\FortuneFileStorage;
use Mockery as m;

class FortuneTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function testCanCreateFortune()
    {
        $this->assertNotEmpty(Fortune::make());
    }
}