<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Announcement;
use App\Models\Executive;
use App\Models\Member;
use App\Models\Activity;

class home_Controller extends Controller
{
    public function index(){
        $announcements = Announcement::orderBy('created_at', 'desc')->take(3)->get();

        if(count($announcements) < 3){
            for($i = count($announcements); $i < 3; $i++){
                $announcements[$i] = new Announcement();
                $announcements[$i]->id = 0;
                $announcements[$i]->content = "No announcements available";
                $announcements[$i]->created_at = Carbon::now();
            }
        }

        $ann_1_date = Carbon::parse($announcements[0]->created_at)->format('j F Y');
        $ann_2_date = Carbon::parse($announcements[1]->created_at)->format('j F Y');
        $ann_3_date = Carbon::parse($announcements[2]->created_at)->format('j F Y');

        $ann_1_content = substr($announcements[0]->content, 0, 90);
        $ann_2_content = substr($announcements[1]->content, 0, 90);
        $ann_3_content = substr($announcements[2]->content, 0, 90);


        $president_ex = Executive::where('position', 'President')->orderBy('created_at', 'desc')->first();
        $president = Member::where('id', $president_ex->member_id)->first();

        $activities = Activity::orderBy('date', 'desc')->take(3)->get();

        $isThereActivities = false;
        if($activities){
            $isThereActivities = true;
        }

        return view('home',
        [
            'ann_1_date' => $ann_1_date,
            'ann_2_date' => $ann_2_date,
            'ann_3_date' => $ann_3_date,
            'ann_1_content' => $ann_1_content,
            'ann_2_content' => $ann_2_content,
            'ann_3_content' => $ann_3_content,
            'ann_1_id' => $announcements[0]->id,
            'ann_2_id' => $announcements[1]->id,
            'ann_3_id' => $announcements[2]->id,
            'president' => $president,
            'activities' => $activities,
            'isThereActivities' => $isThereActivities
        ]
    );
    }
}
