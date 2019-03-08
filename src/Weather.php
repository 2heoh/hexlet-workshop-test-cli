<?php namespace Weather;

class Weather
{

    /**
     * @param $city
     * @return string
     */
    public function getByCity($city): string
    {
        $url = "http://api.apixu.com/v1/current.json?key=452bb5cfe3cf4e4f80b194001190803&q=$city";

        $json = @file_get_contents($url);
        if ($json) {
            $obj = json_decode($json);
            return $obj->current->temp_c;
        } else {
            return "Error";
        }
    }
}
