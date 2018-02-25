<?php

namespace App\Services\Importer;

interface GuzzleRequestInterface
{
    /**
     * @param string $method
     * @param string $url
     *
     * @return mixed
     */
    public function request(string $method, string $url);
}
