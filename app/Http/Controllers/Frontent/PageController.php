<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\HomeGallery;
use App\Models\ExecutiveCommittee;
use App\Models\AdvisorCommittee;
use App\Models\Founder;
use App\Models\ContactMessage;
use App\Models\About;
use App\Models\Quote;
use App\Models\VisionMission;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $sliders = HomeSlider::where('status','active')->get();
        $about = About::where('status','enabled')->first();
        $visionMission = VisionMission::where('status','enabled')->first();
        $galleries = HomeGallery::where('status','active')->get();
        return view('frontend.pages.index',compact('sliders','about','visionMission','galleries'));
    }

    public function news(){
        $news = DB::table('news')->join('users','news.publisher_id','users.id')->select('news.id','news.news_headline','short_desc','news_link','news_cover','published_date','users.name')->where('news.status','published')->get();
        $quotes = Quote::select('quote_speech','speaker','speaker_photo')->where('status','enabled')->get();
        return view('frontend.pages.news',compact('news','quotes'));
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
        $topLevel = Founder::where('top_level',1)->select('name','post','country','photo')->first();
        $allFounders = Founder::where('top_level',0)->select('name','post','country','photo','position')->orderBy('position','asc')->get();
        return view('frontend.pages.founding_team',compact('topLevel','allFounders'));
    }

    public function executivesCommittee(){
        $topLevel = ExecutiveCommittee::where('top_level',1)->select('name','post','country','photo')->first();
        $allExecutives = ExecutiveCommittee::where('top_level',0)->select('name','post','country','photo','position')->orderBy('position','asc')->get();
        return view('frontend.pages.executive_committee',compact('topLevel','allExecutives'));
    }

    public function advisoryCommittee(){
        $topLevel = AdvisorCommittee::where('top_level',1)->select('name','post','country','photo')->first();
        $allAdvisories = AdvisorCommittee::where('top_level',0)->select('name','post','country','photo','position')->orderBy('position','asc')->get();
        return view('frontend.pages.advisory_committee',compact('topLevel','allAdvisories'));
    }

    public function foundingTeam(){
        
    }

    public function regionalsCommittee(){
        return view('frontend.pages.regional_committee');
    }


    public function joinWithUs(){
        return view('frontend.pages.join_us');
    }


    public function login(){
        return view('frontend.pages.login');
    }


    public function contactUs(){
        return view('frontend.pages.contact_us');
    }

    public function contactMessageStore(Request $request){
        $request->validate([
            'contact_name' => 'required',
            'contact_phone' => 'required',
            'contact_country' => 'required',
            'contact_passport' => 'required',
            'contact_message' => 'required',
        ]);


        ContactMessage::create([
            'contact_name' => $request->contact_name,
            'contact_phone' => $request->contact_phone,
            'contact_country' => $request->contact_country,
            'contact_passport' => $request->contact_passport,
            'contact_message' => $request->contact_message,
        ]);

        session()->flash('success','Thanks For Your Message');
        return redirect()->back();
    }
}
