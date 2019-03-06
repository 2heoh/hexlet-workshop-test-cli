<?php
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{

    public function testHello()
    {
        $cli = new HeoH\CLI\Greeting;

        $result = $cli->hello("world");

        $this->assertEquals("Hello world", $result);
    }
}
