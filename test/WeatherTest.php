<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{

    /**
     * @throws CityNotFoundException
     */
    public function testExistingCity()
    {
        $weather = new Weather();

        $temperature = $weather->getByCity('Paris');

        $this->assertRegExp('/\d+/', $temperature);
    }


    /**
     * @throws CityNotFoundException
     */
    public function testNonExistentCity()
    {
        $weather = new Weather();

        $this->expectException(CityNotFoundException::class);

        $weather->getByCity('746546');
    }
}
