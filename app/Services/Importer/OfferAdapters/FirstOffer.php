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
     * @return $this
     */
    public function setApplicationId()
    {
        $this->applicationId = $this->dataApi['id'];

        return $this;
    }

    /**
     * Set countries
     *
     * @return $this
     */
    public function setCountries()
    {
        $this->countries[] = $this->dataApi['country'];

        return $this;
    }

    /**
     * Set payout
     *
     * @return $this
     */
    public function setPayout()
    {
        $this->payout = $this->dataApi['points'] / $this->rate;

        return $this;
    }

    /**
     * Set platform
     *
     * @return $this
     */
    public function setPlatform()
    {
        $this->platform = $this->dataApi['platform'];

        return $this;
    }

}
