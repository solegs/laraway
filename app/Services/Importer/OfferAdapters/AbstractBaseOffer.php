<?php

namespace App\Services\Importer\OfferAdapters;

abstract class AbstractBaseOffer implements BaseOfferInterface
{
    /**
     * @var string
     */
    protected $applicationId;

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var integer
     */
    protected $payout;

    /**
     * @var string
     */
    protected $platform;

    /**
     * @var array
     */
    public $input = [];

    /**
     * @var array
     */
    protected $dataApi = [];

    /**
     * AbstractBaseOffer constructor.
     *
     * @param array $dataApi
     */
    public function __construct(array $dataApi)
    {
        $this->setDataApi($dataApi);

        $this->setApplicationId();
        $this->setCountries();
        $this->setPayout();
        $this->setPlatform();

        $this->input  = [
                'application_id' => $this->getApplicationId(),
                'countries' => $this->getCountries(),
                'payout' => $this->getPayout(),
                'platform' => $this->getPlatform()
            ];
    }

    /**
     * Set dataApi
     * @param array $dataApi
     *
     * @return $this|void
     */
    public function setDataApi(array $dataApi)
    {
        $this->dataApi = $dataApi;
    }

    /**
     * Get applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Get countries
     *
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Get payout
     *
     * @return int
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * Get platform
     *
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

}
