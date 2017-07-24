<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\ApplicantService;
use App\Services\TertiobroadbandService;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class ApplicationController extends Controller
{

    private $tertiobroadbandService;
    private $applicantService;
    public function __construct(TertiobroadbandService $tertiobroadbandService, ApplicantService $applicantService)
    {
        $this->tertiobroadbandService = $tertiobroadbandService;
        $this->applicantService = $applicantService;
    }

    public function listAllApplications() {
        if(Auth::check() && Auth::user()->role == "ADMIN") {
            $applications = $this->applicantService->getApplicationsWithPagination(1);
            $sidebar = view('inc.sidebar');
            $header = view('inc.header');
            $footer = view('inc.footer');
            return view("admin.application.index")
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('footer', $footer)
                ->with('applications', $applications)
                ;
        } else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }

    public function showSearchView(){
        if(Auth::check() && Auth::user()->role == "ADMIN") {
            $sidebar = view('inc.sidebar');
            $header = view('inc.header');
            $footer = view('inc.footer');
            return view("admin.application.search")
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('footer', $footer)
                ;
        } else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }

    public function getSearchResult(Request $request){
        if(Auth::check() && Auth::user()->role == "ADMIN") {
            $applications = $this->applicantService->ajaxSearchApplication($request);
            return view('admin.application.searchResult')->with('applications', $applications);
        } else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }

    public function ajaxDeleteApplicationById(Request $request) {
        if(Auth::check() && Auth::user()->role == "ADMIN") {
            $this->applicantService->deleteApplicationById($request->input('applicationId'));
            return json_encode($request->input('applicationId'));
        }else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }

    public function deleteApplicationById($applicationId) {
        if(Auth::check() && Auth::user()->role == "ADMIN") {
            $this->applicantService->deleteApplicationById($applicationId);
            Session::flash('message', 'Application deleted');
            return back();
        }else {
            Session::flash('message', 'You are not authorized!');
            return Redirect::to('/');
        }
    }

}
