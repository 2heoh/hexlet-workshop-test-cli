<?php namespace HeoH\CLI;

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{

    public function testHello()
    {
        $cli = new Greeting;

        $result = $cli->hello("world");

        $this->assertEquals("Hello world", $result);
    }
}
