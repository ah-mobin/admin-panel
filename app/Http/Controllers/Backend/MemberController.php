<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberRegister(Request $request){
        $request->validate([
            'full_name' => 'required',
            'father_husband_name' => 'required',
            'passport_number' => 'required|unique:members',
            'current_country' => 'required',
            'home_address' => 'required',
            'category_of_work' => 'required',
            'current_mobile_number' => 'required|unique:members',
            'country_mobile_number' => 'required|unique:members',
            'member_avatar' => 'required',
            'password' => 'required',
        ]);

        if($request->password != $request->confirm_password){
            session()->flash('not_match_pass','Password Did Not Match');
            return back()->withInput();
        }

        $file = $request->file('member_avatar')->store('public/members/avatar');
        $imgPathOne = explode('/',$file)[1];
        $imgPathTwo = explode('/',$file)[2];
        $imgPathThree = explode('/',$file)[3];
        
        $host = $_SERVER['HTTP_HOST'];
        
        $fileLocation = "http://".$host."/storage/".$imgPathOne."/".$imgPathTwo."/".$imgPathThree;


        $insertMember = Member::create([
            'full_name' => trim($request->full_name),
            'father_husband_name' => trim($request->father_husband_name),
            'passport_number' => trim($request->passport_number),
            'current_country' => trim($request->current_country),
            'home_address' => trim($request->home_address),
            'category_of_work' => trim($request->category_of_work),
            'current_mobile_number' => trim($request->current_mobile_number),
            'country_mobile_number' => trim($request->country_mobile_number),
            'member_avatar' => $fileLocation,
            'password' => trim($request->password),
        ]);


        if($insertMember){
            session()->flash('success','Member Registration Successful');
            return back();
        }else{
            session()->flash('warning','Something Went Wrong! Try Again');
            return back()->withInput();
        }
        
    }
}
