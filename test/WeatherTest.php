<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{

    public function testExistingCity()
    {
        $weather = new Weather();

        $temperature = $weather->getByCity("Paris");

        $this->assertRegExp("/\d+/", "$temperature");
    }


    public function testNonExistentCity()
    {
        $weather = new Weather();

        $temperature = $weather->getByCity("746546");

        $this->assertEquals("Error", $temperature);
    }
}
