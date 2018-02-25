<?php

namespace App\Services\Importer\OfferAdapters;

class FirstOffer extends AbstractBaseOffer
{
    /**
     * @var integer
     */
    protected $rate = 500;

    /**
     * Set applicationId
     *
     * @return $this|void
     */
    public function setApplicationId()
    {
        $this->applicationId = $this->dataApi['id'];
    }

    /**
     * Set countries
     *
     * @return $this|void
     */
    public function setCountries()
    {
        $this->countries[] = $this->dataApi['country'];
    }

    /**
     * Set payout
     *
     * @return $this|void
     */
    public function setPayout()
    {
        $this->payout = $this->dataApi['points'] / $this->rate;
    }

    /**
     * Set platform
     *
     * @return $this|void
     */
    public function setPlatform()
    {
        $this->platform = $this->dataApi['platform'];
    }

}
