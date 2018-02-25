<?php

namespace App\Services\Importer;

use GuzzleHttp\Client;

class GuzzleRequest implements GuzzleRequestInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * GuzzleRequest constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $method
     * @param string $url
     *
     * @return mixed
     */
    public function request(string $method, string $url)
    {
        try {

            $request = $this->client->request($method, $url);
            $result = json_decode($request->getBody()->getContents(), true);

            return $result;

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

}
