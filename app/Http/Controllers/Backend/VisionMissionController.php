<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisionMission;

class VisionMissionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $visionMissions = VisionMission::select('id','vision_mission_content','status')->get();
        return view('backend.pages.home.vision_mission.vision_mission',compact('visionMissions'));
    }

    public function store(Request $request){
        $request->validate([
            'vision_mission_content' => 'required'
        ]);

        VisionMission::create([
            'vision_mission_content' => $request->vision_mission_content,
        ]);

        session()->flash('success','Content Added');
        return redirect()->back();
    }


    public function edit($id){
        $visionMission = VisionMission::where('id',$id)->select('id','vision_mission_content','status')->first();
        return view('backend.pages.home.vision_mission.edit_vision_mission',compact('visionMission'));
    }

    public function update(Request $request, $id){

        // if($request->status == 'enabled'){
        //     VisionMission::update(['status' => 'disabled']);
        // }
        
        VisionMission::where('id',$id)->update([
            'vision_mission_content' => $request->vision_mission_content,
            'status' => $request->status
        ]);

        session()->flash('success','Content Updated');
        return redirect()->route('vision.mission');
    }
}
