<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\HomeGallery;
use Storage;
class HomePageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function sliders(){
        $sliders = HomeSlider::select('id','slider_heading_one','slider_heading_two','slider_heading_three','slider_image','status')->get();
        return view('backend.pages.home.slider.sliders',compact('sliders'));
    }


    public function sliderAdded(Request $request){
        $request->validate([
            'slider_heading_one' => 'required|max:64',
            'slider_heading_two' => 'required|max:64',
            'slider_heading_three' => 'required|max:64',
            'slider_image' => 'required|mimes:jpg,JPEG,PNG,png,WEBP,webp',
        ]);

        $file = $request->file('slider_image')->store('public/pages/home/sliders');
        $imgPathOne = explode('/',$file)[1];
        $imgPathTwo = explode('/',$file)[2];
        $imgPathThree = explode('/',$file)[3];
        $imgPathFour = explode('/',$file)[4];
        
        $host = $_SERVER['HTTP_HOST'];
        
        $fileLocation = "http://".$host."/storage/".$imgPathOne."/".$imgPathTwo."/".$imgPathThree."/".$imgPathFour;

        $insert = HomeSlider::create([
            'slider_heading_one' => $request->slider_heading_one,
            'slider_heading_two' => $request->slider_heading_two,
            'slider_heading_three' => $request->slider_heading_three,
            'slider_image' => $fileLocation,
        ]);


        if($insert){
            session()->flash('success','Home Page Slider Added Successful');
            return redirect()->back();
        }else{
            session()->flash('warning','Something Went Wrong!');
            return redirect()->back();
        }
    }


    public function sliderEdit($id){
        $slider = HomeSlider::where('id',$id)->select('id','slider_heading_one','slider_heading_two','slider_heading_three','slider_image','status')->first();

        return view('backend.pages.home.slider.edit_slider',compact('slider'));
    }


    public function sliderUpdate(Request $request, $id){
        
        if($request->hasFile('slider_image')){
            $oldSlider = $request->slider_current_image;
            $getoldSlider = explode('/',$oldSlider);
            $lastgetoldSlider = 'public/pages/home/sliders/'.end($getoldSlider);
            Storage::delete($lastgetoldSlider);

            $updateSliderPath = $request->file('slider_image')->store('public/pages/home/sliders');
            $updateSliderPathOne = explode('/',$updateSliderPath)[1];
            $updateSliderPathTwo = explode('/',$updateSliderPath)[2];
            $updateSliderPathThree = explode('/',$updateSliderPath)[3];
            $updateSliderPathFour = explode('/',$updateSliderPath)[4];
            $host = $_SERVER['HTTP_HOST'];
            $updatedSliderLocationPath = "http://".$host."/storage/".$updateSliderPathOne."/".$updateSliderPathTwo."/".$updateSliderPathThree."/".$updateSliderPathFour;


            HomeSlider::where('id',$id)->update([
                'slider_heading_one' => $request->slider_heading_one,
                'slider_heading_two' => $request->slider_heading_two,
                'slider_heading_three' => $request->slider_heading_three,
                'status' => $request->status,
                'slider_image' => $updatedSliderLocationPath,
            ]);

            session()->flash('update_slider','Slider Update Successful');
            return redirect()->route('sliders');

        }else{
            HomeSlider::where('id',$id)->update([
                'slider_heading_one' => $request->slider_heading_one,
                'slider_heading_two' => $request->slider_heading_two,
                'slider_heading_three' => $request->slider_heading_three,
                'status' => $request->status,
            ]);

            session()->flash('update_slider','Slider Update Successful');
            return redirect()->route('sliders');
        }
    }




    // galleries

    public function galleries(){
        $galleries = HomeGallery::select('id','gallery_image_location')->get();
        return view('backend.pages.home.gallery.galleries',compact('galleries'));
    }


    public function galleryImageAdded(Request $request){
        $request->validate([
            'gallery_image_location' => 'required|mimes: jpg,JPG,JPEG,jpeg,png,PNG,WEBP,webp',
        ]);

        $file = $request->file('gallery_image_location')->store('public/pages/home/galleries');
        $imgPathOne = explode('/',$file)[1];
        $imgPathTwo = explode('/',$file)[2];
        $imgPathThree = explode('/',$file)[3];
        $imgPathFour = explode('/',$file)[4];
        
        $host = $_SERVER['HTTP_HOST'];
        
        $fileLocation = "http://".$host."/storage/".$imgPathOne."/".$imgPathTwo."/".$imgPathThree."/".$imgPathFour;



        $insert = HomeGallery::create([
            'gallery_image_location' => $fileLocation,
        ]);


        if($insert){
            session()->flash('success','Insert Image Into Gallery');
            return redirect()->back();
        }else{
            session()->flash('warning','Something Went Wrong!');
            return redirect()->back();
        }
    }




}
