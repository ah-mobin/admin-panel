<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function news(){
        $allNews = DB::table('news')->join('users','news.publisher_id','users.id')
                ->select('news.*','users.name','users.role')->get();
        return view('backend.pages.news.news',compact('allNews'));
    }

    public function store(Request $request){
        $request->validate([
            'news_headline' => 'required|unique:news',
            'short_desc' => 'required',
            'news_cover' => 'required',
        ]);
        
        $cover = $request->file('news_cover')->store('public/news/covers');
        $coverPathOne = explode('/',$cover)[1];
        $coverPathTwo = explode('/',$cover)[2];
        $coverPathThree = explode('/',$cover)[3];
        $host = $_SERVER['HTTP_HOST'];
        $fileLocation = "http://".$host."/storage/".$coverPathOne."/".$coverPathTwo."/".$coverPathThree;
            
        News::create([
            'news_headline' => trim($request->news_headline),
            'short_desc' => trim($request->short_desc),
            'news_details' => trim($request->news_details),
            'news_link' => trim($request->news_link),
            'news_cover' => $fileLocation,
            'publisher_id' => Auth::id(),
        ]);

        session()->flash('success','News Added Successful');
        return back();
    }

    public function show($id){
        $news = DB::table('news')
                ->join('users','news.publisher_id','users.id')
                ->select('news.*','users.name','users.role')
                ->where('news.id',$id)
                ->first();
        return view('backend.pages.news.view_news',compact('news'));
    }

    public function edit($id){
        $news = DB::table('news')
                ->join('users','news.publisher_id','users.id')
                ->select('news.*','users.name','users.role')
                ->where('news.id',$id)
                ->first();
        return view('backend.pages.news.edit_news',compact('news'));
    }


    public function update(Request $request, $id){
        if($request->hasFile('news_cover')){
            $oldImage = $request->old_cover;
            $getoldImage = explode('/',$oldImage);
            $lastgetoldImage = 'public/news/covers/'.end($getoldImage);
            Storage::delete($lastgetoldImage);

            $updateImagePath = $request->file('news_cover')->store('public/news/covers');
            $updateImagePathOne = explode('/',$updateImagePath)[1];
            $updateImagePathTwo = explode('/',$updateImagePath)[2];
            $updateImagePathThree = explode('/',$updateImagePath)[3];

            $host = $_SERVER['HTTP_HOST'];
            $updatedImageLocationPath = "http://".$host."/storage/".$updateImagePathOne."/".$updateImagePathTwo."/".$updateImagePathThree;

            if($request->status == 'published'){
                News::where('id',$id)->update([
                    'news_headline' => trim($request->news_headline),
                    'short_desc' => trim($request->short_desc),
                    'news_details' => trim($request->news_details),
                    'news_link' => trim($request->news_link),
                    'news_cover' => $updatedImageLocationPath,
                    'status' => 'published',
                    'published_date' => Carbon::now()
                ]);
            }else{
                News::where('id',$id)->update([
                    'news_headline' => trim($request->news_headline),
                    'short_desc' => trim($request->short_desc),
                    'news_details' => trim($request->news_details),
                    'news_link' => trim($request->news_link),
                    'news_cover' => $updatedImageLocationPath,
                ]);
            }
        }else{
            if($request->status == 'published'){
                News::where('id',$id)->update([
                    'news_headline' => trim($request->news_headline),
                    'short_desc' => trim($request->short_desc),
                    'news_details' => trim($request->news_details),
                    'news_link' => trim($request->news_link),
                    'status' => 'published',
                    'published_date' => Carbon::now(),
                ]);
            }else{
                News::where('id',$id)->update([
                    'news_headline' => trim($request->news_headline),
                    'short_desc' => trim($request->short_desc),
                    'news_details' => trim($request->news_details),
                    'news_link' => trim($request->news_link),
                ]);
            }
        }

        session()->flash('success','News Information Update Successful');
        return redirect()->route('latest.news');
    }
}
