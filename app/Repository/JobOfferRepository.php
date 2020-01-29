<?php

namespace App\Repositories;
use App\Interfaces\JobOfferRepositoryInterface;

/**
 * Class JobOffersRepository
 * @package App\Repositories
 */

 class JobOfferRepository implements JobOfferRepositoryInterface
 {
    public function getJobOffers()
    {
        $response = file_get_contents('https://demo.appmanager.pl/api/v1/ads?_format=json');
        $response = json_decode($response, TRUE);

        return $response;
    }
 }