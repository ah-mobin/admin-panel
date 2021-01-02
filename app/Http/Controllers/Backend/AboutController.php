<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $abouts = About::select('id','about_content','status')->get();
        return view('backend.pages.home.about.about',compact('abouts'));
    }

    public function store(Request $request){
        $request->validate([
            'about_content' => 'required'
        ]);

        About::create([
            'about_content' => $request->about_content,
        ]);

        session()->flash('success','About Content Added');
        return redirect()->back();
    }


    public function edit($id){
        $about = About::where('id',$id)->select('id','about_content','status')->first();
        return view('backend.pages.home.about.edit_about',compact('about'));
    }

    public function update(Request $request, $id){

        if($request->status == 'enabled'){
            About::update(['status' => 'disabled']);
        }
        
        About::where('id',$id)->update([
            'about_content' => $request->about_content,
            'status' => $request->status
        ]);

        session()->flash('success','About Content Updated');
        return redirect()->route('abouts');
    }
}
