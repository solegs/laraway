<?php

namespace App\Services\Importer\OfferAdapters;

class SecondOffer extends AbstractBaseOffer
{
    /**
     * Set applicationId
     *
     * @return $this|void
     */
    public function setApplicationId()
    {
        $this->applicationId = $this->dataApi['uid'];
    }

    /**
     * Set countries
     *
     * @return $this|void
     */
    public function setCountries()
    {
        $this->countries = $this->dataApi['countries'];
    }

    /**
     * Set payout
     *
     * @return $this|void
     */
    public function setPayout()
    {
        $this->payout = $this->dataApi['payout']['amount'];
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

    /**
     * @param array $list
     *
     * @return $this|void
     */
    public function getFormatIso(array $list)
    {
        $countries = [];

        foreach ($this->countries as $item) {

            if (in_array($item, $list)) {

                $countries[] = array_search($item, $list);
            }
        }

        $this->countries = $this->input['countries'] = $countries;
    }

}
