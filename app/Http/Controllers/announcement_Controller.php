<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;
use App\Models\Executive;
use App\Models\Member;

class announcement_Controller extends Controller
{
    public function index(){

        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        $isAnnAvailable = false;
        if($announcements){
            $isAnnAvailable = true;
        }


        return view('announcements',
            [
                'announcements' => $announcements,
                'isAnnAvailable' => $isAnnAvailable
            ]
        );
    }

    public function dateFilter(Request $request){
        $date = $request->input('startDate');
        $announcements = Announcement::where('created_at', '<=', $date)->orderBy('created_at', 'desc')->get();
        $isAnnAvailable = false;
        if($announcements->count() > 0){
            $isAnnAvailable = true;
        }

        if($isAnnAvailable == false){
            return redirect('/404');
        }

        return view('announcements',
            [
                'announcements' => $announcements,
                'isAnnAvailable' => $isAnnAvailable
            ]
        );
    }

    public function show($id){
        if($id == 0){
            return redirect('/404');
        }

        $announcement = Announcement::where('id', $id)->first();

        if(!$announcement){
            return redirect('/404');
        }


        $executive = Executive::where('id', $announcement->on_behalf_of)->first();
        $member = Member::where('id', $executive->member_id)->first();

        
        return view('ind_announcement', 
        [
            'announcement' => $announcement,
            'executive' => $executive,
            'member' => $member
        ]);
    }


    public function allannouncementsadmin(){
        $announcements = Announcement::orderBy('created_at', 'desc')->get();

        $modifiedObjectArray = [];

        foreach($announcements as $announcement){
            $executive = Executive::where('id', $announcement->on_behalf_of)->first();
            $executive_member = Member::where('id', $executive->member_id)->first();
            $member = Member::where('id', $announcement->admin_name)->first();

            $modifiedObject = (object) [
                'announcement' => $announcement,
                'executive' => $executive,
                'member' => $member,
                'executive_member' => $executive_member
            ];

            array_push($modifiedObjectArray, $modifiedObject);
        }

        return view('admin.allannouncementsadmin',
            [
                'announcements' => $modifiedObjectArray
            ]
        );
    }
}
