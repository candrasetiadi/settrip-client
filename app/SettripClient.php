<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class SettripClient {

    protected $uri = [
        'homepage' => '/home',
    ];

    protected $client;
    protected $token = '';

    public function __construct()
    {
        $this->client = new Client();

        $this->host = env('API_URL', '') . $this->host;

        $this->getToken();

    }

    public function getToken()
    {
        $host = env('API_URL', '');

        return $result;
    }

    public function sendRequest($uri = '', $data = [], $method = 'GET'){

        $res = $this->client->request($method, $this->host . $uri, [
            'headers' => [
                'Authorization' => 'Bearer '. $this->token
            ],
            'form_params' => $data,
            'http_errors' => false
        ]);

        $result = json_decode($res->getBody(), true);

        return $result;
    }
}