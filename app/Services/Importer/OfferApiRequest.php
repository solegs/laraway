<?php

namespace App\Services\Importer;

class OfferApiRequest
{
    /**
     * @var GuzzleRequest
     */
    protected $requestApi;

    /**
     * OfferApiRequest constructor.
     */
    public function __construct()
    {
        $this->requestApi = new GuzzleRequest();
    }

    /**
     * @return mixed
     */
    public function getOffers()
    {
        $url = \App::make('url')->to(env('API_URI'));
        $result = $this->requestApi->request('GET', $url);

        return $result;
    }

    /**
     * @return mixed
     */
    public function getCountries()
    {
        $url = 'http://country.io/iso3.json';
        $result = $this->requestApi->request('GET', $url);

        return $result;
    }

}
