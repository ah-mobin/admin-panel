<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExecutiveCommittee;
use Storage;

class ExecutiveCommitteePageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function executiveCommittee(){
        $executives = ExecutiveCommittee::select('id','name','country','post','photo','position','top_level')->get();
        return view('backend.pages.committee.executive.executives',compact('executives'));
    }


    public function executiveCommitteeStore(Request $request){
        
        $request->validate([
            'name' => 'required',
            'position' => 'numeric',
        ]);

        if($request->top_level == '1'){
            ExecutiveCommittee::where('top_level',1)->update(['top_level' => '0']);
        }

        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('public/committee/executive');
            $imgPathOne = explode('/',$photo)[1];
            $imgPathTwo = explode('/',$photo)[2];
            $imgPathThree = explode('/',$photo)[3];
            $host = $_SERVER['HTTP_HOST'];
            $fileLocation = "http://".$host."/storage/".$imgPathOne."/".$imgPathTwo."/".$imgPathThree;    

            
            $store = ExecutiveCommittee::create([
                'name' => trim($request->name),
                'post' => trim($request->post),
                'country' => trim($request->country),
                'photo' => $fileLocation,
                'top_level' => trim($request->top_level),
                'position' => trim($request->position),
                'phone_number' => trim($request->phone_number),
                'email' => trim($request->email),
            ]);
        }else{
            $store = ExecutiveCommittee::create([
                'name' => trim($request->name),
                'post' => trim($request->post),
                'country' => trim($request->country),
                'top_level' => trim($request->top_level),
                'position' => trim($request->position),
                'phone_number' => trim($request->phone_number),
                'email' => trim($request->email),
            ]);
        }

        if($store){
            session()->flash('success','Member Insert Successful');
        }else{
            session()->flash('warning','Something Went Wrong! Try Again');
        }

        return back();
    }



    public function executiveCommitteeEdit($id){
        $executive = ExecutiveCommittee::select('id','name','country','post','photo','top_level','position','phone_number','email')->where('id',$id)->first();
        return view('backend.pages.committee.executive.edit_executive',compact('executive'));
    }


    public function executiveCommitteeUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'position' => 'numeric',
        ]);


        if($request->hasFile('photo')){
            $oldImage = $request->old_image;
            $getoldImage = explode('/',$oldImage);
            $lastgetoldImage = 'public/committee/executive'.end($getoldImage);
            Storage::delete($lastgetoldImage);

            $updateImagePath = $request->file('photo')->store('public/committee/executive');
            $updateImagePathOne = explode('/',$updateImagePath)[1];
            $updateImagePathTwo = explode('/',$updateImagePath)[2];
            $updateImagePathThree = explode('/',$updateImagePath)[3];

            $host = $_SERVER['HTTP_HOST'];
            $updatedImageLocationPath = "http://".$host."/storage/".$updateImagePathOne."/".$updateImagePathTwo."/".$updateImagePathThree;

            if($request->top_level == '1'){
                ExecutiveCommittee::where('top_level',1)->update(['top_level' => 0]);
            }

            ExecutiveCommittee::where('id',$id)->update([
                'name' => trim($request->name),
                'post' => trim($request->post),
                'country' => trim($request->country),
                'photo' => $updatedImageLocationPath,
                'top_level' => trim($request->top_level),
                'position' => trim($request->position),
                'phone_number' => trim($request->phone_number),
                'email' => trim($request->email),
            ]);

            session()->flash('success','Member Information Update Successful');
            return redirect()->route('executive.member');

        }else{
            ExecutiveCommittee::where('id',$id)->update([
                'name' => trim($request->name),
                'post' => trim($request->post),
                'country' => trim($request->country),
                'top_level' => trim($request->top_level),
                'position' => trim($request->position),
                'phone_number' => trim($request->phone_number),
                'email' => trim($request->email),
            ]);

            session()->flash('success','Member Information Update Successful');
            return redirect()->route('executive.member');
        }
    }
}
