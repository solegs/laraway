<?php

namespace App\Services\Importer\OfferAdapters;

interface BaseOfferInterface
{
    /**
     * Set applicationId
     *
     * @return $this
     */
    public function setApplicationId();

    /**
     * Set countries
     *
     * @return $this
     */
    public function setCountries();

    /**
     * Set payout
     *
     * @return $this
     */
    public function setPayout();

    /**
     * Set platform
     *
     * @return $this
     */
    public function setPlatform();

    /**
     * Set dataApi
     * @param array $dataApi
     *
     * @return $this
     */
    public function setDataApi(array $dataApi);

    /**
     * Get application_id
     *
     * @return string
     */
    public function getApplicationId();

    /**
     * Get countries
     *
     * @return array
     */
    public function getCountries();

    /**
     * Get payout
     *
     * @return int
     */
    public function getPayout();

    /**
     * Get platform
     *
     * @return string
     */
    public function getPlatform();

}
