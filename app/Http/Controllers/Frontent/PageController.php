<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function news(){
        return view('frontend.pages.news');
    }

    public function activities(){
        return view('frontend.pages.activities');
    }

    public function notice(){
        return view('frontend.pages.notice');
    }

    public function investment(){
        return view('frontend.pages.investment');
    }


    public function donation(){
        return view('frontend.pages.donation');
    }

    public function oneStopService(){
        return view('frontend.pages.one_stop_service');
    }

    public function foundersCommittee(){
        return view('frontend.pages.founding_team');
    }

    public function executivesCommittee(){
        return view('frontend.pages.executive_committee');
    }

    public function regionalsCommittee(){
        return view('frontend.pages.regional_committee');
    }


    public function joinWithUs(){
        return view('frontend.pages.join_us');
    }

    public function memberSigned(Request $request){
        session()->flash('success','Thanks For Joining With Us');
        return redirect()->back();
    }


    public function login(){
        return view('frontend.pages.login');
    }
}
