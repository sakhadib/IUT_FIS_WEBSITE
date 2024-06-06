<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Workshop as workshop;
use App\Models\WorkshopSpeaker;
use App\Models\Member;
use App\Models\WorkshopImage;
use Carbon\Carbon;

class workshop_Controller extends Controller
{
    public function index()
    {
        $workshops = workshop::orderBy('date')->where('date', '>', now())->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'up']);
    }

    public function iutprev()
    {
        $workshops = workshop::orderBy('date', 'desc')->where('date', '<', now())->where('inIUT', true)->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'iutprev']);
    }

    public function outprev()
    {
        $workshops = workshop::orderBy('date', 'desc')->where('date', '<', now())->where('inIUT', false)->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'outprev']);
    }

    public function iut()
    {
        $workshops = workshop::orderBy('date')->where('inIUT', true)->where('date', '>', now())->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'iut']);
    }


    public function out()
    {
        $workshops = workshop::orderBy('date')->where('inIUT', false)->where('date', '>', now())->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'out']);
    }

    public function all()
    {
        $workshops = workshop::orderBy('date', 'desc')->get();

        if($workshops->isEmpty()){
            return redirect('/');
        }

        return view('workshop', ['workshops' => $workshops, 'menuID' => 'all']);
    }

    public function show($id)
    {
        $workshop = workshop::find($id);

        if($workshop == null){
            return redirect('/404');
        }

        $speakers = WorkshopSpeaker::where('workshop_id', $id)->get();

        $modifiedWorkshopSpeakerArray = [];

        foreach($speakers as $speaker){
            if($speaker->member_id == null){
                $sp = (object) [
                    'name' => $speaker->name,
                    'profile_link' => $speaker->profile_link
                ];
            }
            else{
                $member = Member::find($speaker->member_id);
                $sp = (object) [
                    'name' => $member->name,
                    'profile_link' => '/profile/'.$speaker->member_id
                ];
            
            }

            array_push($modifiedWorkshopSpeakerArray, $sp);
        }

        $images = WorkshopImage::where('workshop_id', $id)->get();

        

        return view('workshop_show', [
            'workshop' => $workshop,
            'speakers' => $modifiedWorkshopSpeakerArray,
            'images' => $images
        ]);
    }
}
