<?php

namespace App\Console\Commands;

use App\Offer;
use App\Services\Importer\OfferAdapters\FirstOffer;
use App\Services\Importer\OfferAdapters\SecondOffer;
use App\Services\Importer\OfferApiRequest;
use Illuminate\Console\Command;

class CreateOffers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:offers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command create new offers';

    /**
     * @var OfferApiRequest
     */
    private $offerApiRequest;

    /**
     * CreateOffers constructor.
     *
     * @param OfferApiRequest $offerApiRequest
     */
    public function __construct(OfferApiRequest $offerApiRequest)
    {
        parent::__construct();

        $this->offerApiRequest = $offerApiRequest;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $offers = $this->offerApiRequest->getOffers();
        $countries = $this->offerApiRequest->getCountries();

        foreach ($offers as $key => $item) {
            /** @var \App\Offer $offer */
            $offer = new Offer();
            $item = array_shift($item);

            if (!array_key_exists("id", $item)) {

                $newOffer = new SecondOffer($item);
                $newOffer->getFormatIso($countries);
            } else {
                $newOffer = new FirstOffer($item);
            }

            $offer->updateOrCreate(['application_id' => $newOffer->input['application_id']], $newOffer->input);
        }
    }

}
