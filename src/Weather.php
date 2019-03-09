<?php namespace Weather;

use GuzzleHttp\Client;
use Exception;

class Weather
{
    private $client;

    /**
     * Weather constructor.
     */
    public function __construct()
    {

        $this->client = new Client(['http_errors' => false]);
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @param $city
     * @return string
     * @throws CityNotFoundException
     * @throws Exception
     */
    public function getTemperatureInCity($city): string
    {
        $url = "http://api.apixu.com/v1/current.json?key=452bb5cfe3cf4e4f80b194001190803&q=$city";

        $response = $this->client->get($url);

        if ($response->getStatusCode() == 200) {
            $obj = json_decode($response->getBody());
            return $obj->current->temp_c;
        } elseif ($response->getStatusCode() == 400) {
            throw new CityNotFoundException("City '$city' not found");
        } else {
            throw new Exception("Very bad thing happened");
        }
    }
}
