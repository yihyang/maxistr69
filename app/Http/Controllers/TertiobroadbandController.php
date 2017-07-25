<?php

namespace App\Http\Controllers;

use App\Services\ApplicantService;
use App\Services\TertiobroadbandService;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TertiobroadbandController extends Controller{

    private $tertiobroadbandService;
    private $applicantService;

    public function __construct(TertiobroadbandService $tertiobroadbandService, ApplicantService $applicantService)
    {
        $this->tertiobroadbandService = $tertiobroadbandService;
        $this->applicantService = $applicantService;
    }

    public function index() {
      $tertiobroadbands = $this->tertiobroadbandService->getAllTertiobroadband();
      $sidebar = view('inc.sidebar');
      $header = view('inc.header');
      $footer = view('inc.footer');

      return view("admin.tertiobroadband.index")
          ->with('header', $header)
          ->with('sidebar', $sidebar)
          ->with('footer', $footer)
          ->with('tertiobroadbands', $tertiobroadbands)
          ;
    }

    public function showTertiobroadbandById($id) {
        if(Auth::user()) {
            $tertiobroadband = $this->tertiobroadbandService->findTertiobroadbandById($id);
            $sidebar = view('inc.sidebar');
            $header = view('inc.header');
            $footer = view('inc.footer');
            return view("admin.tertiobroadband.show")
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('footer', $footer)
                ->with('tertiobroadband', $tertiobroadband)
                ;
        }else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }
}
