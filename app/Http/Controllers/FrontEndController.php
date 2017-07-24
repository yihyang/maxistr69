<?php

namespace App\Http\Controllers;

use App\Services\ApplicantService;
use App\Services\TertiobroadbandService;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontEndController extends Controller {

    private $tertiobroadbandService;
    private $applicantService;

    public function __construct(TertiobroadbandService $tertiobroadbandService, ApplicantService $applicantService)
    {
        $this->tertiobroadbandService = $tertiobroadbandService;
        $this->applicantService = $applicantService;
    }

    public function homePage() {
        $tertiobroadbands = $this->tertiobroadbandService->getAllTertiobroadband();
        $sidebar = view('frontInc.sidebar');
        $header = view('frontInc.header');
        $footer = view('frontInc.footer');
        return view("front.home")
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('footer', $footer)
            ->with('tertiobroadbands', $tertiobroadbands)
            ;
    }

}
