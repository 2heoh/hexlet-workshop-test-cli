<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherE2ETest extends TestCase
{

    public function testExistingCity()
    {
        $weather = system("./bin/weather Paris 2>&1");
        $this->assertRegExp("/^-?\d+$/", $weather);
    }
}
