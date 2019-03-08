<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherE2ETest extends TestCase
{

    public function testExistingCity()
    {
        $weather = system("./weather Paris");
        $this->assertRegExp("/^-?\d+$/", $weather);
    }
}
