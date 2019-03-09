<?php
/**
 * Created by PhpStorm.
 * User: sergeylobin
 * Date: 2019-03-09
 * Time: 14:31
 */

namespace Weather;


class FakeHTTPResponse
{

    private $code;
    private $body;

    /**
     * FakeHTTPResponse constructor.
     * @param $statusCode
     * @param $fileWithBody
     */
    public function __construct($statusCode, $fileWithBody)
    {
        $this->code = $statusCode;
        $this->body = file_get_contents($fileWithBody);
    }

    public function getStatusCode(): int
    {
        return $this->code;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}
