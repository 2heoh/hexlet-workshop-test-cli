<?php namespace Weather;


class FakeHTTPClient
{

    private $fakeHTTPResponse;

    public function __construct($responseCode, $fileWithBody)
    {
        $this->fakeHTTPResponse = $response = new FakeHTTPResponse($responseCode, $fileWithBody);
    }

    public function get($url): FakeHTTPResponse
    {
        return $this->fakeHTTPResponse;
    }
}
