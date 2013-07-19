<?php

use Wheeler\Fortune\Fortune;
use Mockery as m;

class FortuneTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testCanCreateFortune()
    {
        $this->assertNotEmpty(Fortune::make());
    }
}