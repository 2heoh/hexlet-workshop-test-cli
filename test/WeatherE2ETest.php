<?php namespace Weather;

use PHPUnit\Framework\TestCase;

class WeatherE2ETest extends TestCase
{

    public function testExistingCity()
    {
        $_ENV['HTTP_CLIENT'] = 'FakeHTTPClient';

        $temperature = system('./bin/weather berlin 2>&1');

        $this->assertRegExp('/^-?\d+$/', $temperature);
    }
}
