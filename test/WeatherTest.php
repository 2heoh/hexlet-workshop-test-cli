<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{

    /**
     * @throws CityNotFoundException
     */
    public function testTemperatureInBerlinIs10()
    {
        $weather = new Weather();
        $weather->setClient(new FakeHTTPClient(200, "test/fakes/good_response.json"));

        $temperature = $weather->getTemperatureInCity('Berlin');

        $this->assertEquals(10, $temperature);
    }


    /**
     * @throws CityNotFoundException
     */
    public function testNonExistentCity()
    {
        $weather = new Weather();
        $weather->setClient(new FakeHTTPClient(400, "test/fakes/bad_response.json"));

        $this->expectException(CityNotFoundException::class);
        $this->expectExceptionMessage('City \'Non-existing-city\' not found');

        $weather->getTemperatureInCity('Non-existing-city');
    }
}
