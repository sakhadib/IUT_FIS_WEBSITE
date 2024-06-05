<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;

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

    public function show($id){
        $announcement = Announcement::where('id', $id)->first();

        return view('announcement',
            [
                'announcement' => $announcement
            ]
        );
    }
}
