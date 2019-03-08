<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{
    public function testExistingCity()
    {
        $weather = system("./weather Novosibirsk 2>&1");
        $this->assertRegExp("/^-?\d+$/", $weather);
    }

    public function testNonExistentCity()
    {
        $weather = system("./weather 12323 2>&1");
        $this->assertEquals("Error", $weather);
    }
}
