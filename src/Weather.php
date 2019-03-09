<?php namespace Weather;

use Exception;

class Weather
{

    /**
     * @param $city
     * @return string
     */
    public function getByCity($city): string
    {
        $url = "http://api.apixu.com/v1/current.json?key=452bb5cfe3cf4e4f80b194001190803&q=$city";

        set_error_handler(
            function ($severity, $message, $file, $line) {
                throw new Exception($message);
            }
        );

        try {
            $json = file_get_contents($url);
        } finally {
            restore_error_handler();
        }
        $obj = json_decode($json);

        return $obj->current->temp_c;
    }
}
