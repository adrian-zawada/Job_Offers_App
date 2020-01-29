<?php

namespace App\Http\Controllers;

use App\Interfaces\JobOfferRepositoryInterface;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * PostController constructor.
     *
     * @param JobOfferRepositoryInterface $post
     */
    public function __construct(JobOfferRepositoryInterface $jobOfferInterface)
    {
        $this->jobOfferInterface = $jobOfferInterface;
    }

    /**
     * List all Job Offers.
     *
     * @return mixed
     */
    public function index()
    {
        $data = $this->jobOfferInterface->getJobOffers();
        return view('index', compact('data'));
    }
}
