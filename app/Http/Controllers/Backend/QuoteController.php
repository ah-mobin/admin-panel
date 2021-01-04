<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function quotes(){
        $quotes = Quote::select('id','quote_speech','speaker','speaker_photo','status')->get();
        return view('backend.pages.quotes.quotes',compact('quotes'));
    }

    public function store(Request $request){
        $request->validate([
            'quote_speech' => 'required',
            'speaker' => 'required',
            'speaker_photo' => 'required',
        ]);
        
        $cover = $request->file('speaker_photo')->store('public/quotes/speaker');
        $coverPathOne = explode('/',$cover)[1];
        $coverPathTwo = explode('/',$cover)[2];
        $coverPathThree = explode('/',$cover)[3];
        $host = $_SERVER['HTTP_HOST'];
        $fileLocation = "http://".$host."/storage/".$coverPathOne."/".$coverPathTwo."/".$coverPathThree;
            
        Quote::create([
            'quote_speech' => trim($request->quote_speech),
            'speaker' => trim($request->speaker),
            'speaker_photo' => $fileLocation,
        ]);

        session()->flash('success','Quote Added Successful');
        return back();
    }

    public function show($id){
        
    }

    public function edit($id){
        $quote = Quote::where('id',$id)->first();
        return view('backend.pages.quotes.edit_quote',compact('quote'));
    }


    public function update(Request $request, $id){
        if($request->hasFile('speaker_photo')){
            $oldImage = $request->old_image;
            $getoldImage = explode('/',$oldImage);
            $lastgetoldImage = 'public/quotes/speaker/'.end($getoldImage);
            Storage::delete($lastgetoldImage);

            $updateImagePath = $request->file('speaker_photo')->store('public/quotes/speaker');
            $updateImagePathOne = explode('/',$updateImagePath)[1];
            $updateImagePathTwo = explode('/',$updateImagePath)[2];
            $updateImagePathThree = explode('/',$updateImagePath)[3];

            $host = $_SERVER['HTTP_HOST'];
            $updatedImageLocationPath = "http://".$host."/storage/".$updateImagePathOne."/".$updateImagePathTwo."/".$updateImagePathThree;

            
            Quote::where('id',$id)->update([
                'quote_speech' => trim($request->quote_speech),
                'speaker' => trim($request->speaker),
                'speaker_photo' => $updatedImageLocationPath,
                'status' => trim($request->status)
            ]);
            
        }else{
            Quote::where('id',$id)->update([
                'quote_speech' => trim($request->quote_speech),
                'speaker' => trim($request->speaker),
                'status' => trim($request->status)
            ]);
        }

        session()->flash('success','Quote Update Successful');
        return redirect()->route('popular.quotes');
    }
}
