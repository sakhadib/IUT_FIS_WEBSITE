<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;
use App\Models\News;
use App\Models\Activity;

class dashboard_Controller extends Controller
{
    public function index()
    {
        $TotalNumberOfAnnouncements = Announcement::count();
        $TotalAnnCreated_atToday = Announcement::where('created_at', '>=', date('Y-m-d').' 00:00:00')->count();
        $TotalAnnCreated_atThisMonth = Announcement::where('created_at', '>=', date('Y-m').'-01 00:00:00')->count();
        $LastCreatedAnnouncement = Announcement::orderBy('created_at', 'desc')->first();

        $TotalNumberOfNews = News::count();
        $TotalNewsCreated_atToday = News::where('created_at', '>=', date('Y-m-d').' 00:00:00')->count();
        $TotalNewsCreated_atThisMonth = News::where('created_at', '>=', date('Y-m').'-01 00:00:00')->count();
        $LastCreatedNews = News::orderBy('created_at', 'desc')->first();

        $TotalNumberOfActivity = Activity::count();
        $TotalActivityCreated_atToday = Activity::where('created_at', '>=', date('Y-m-d').' 00:00:00')->count();
        $TotalActivityCreated_atThisMonth = Activity::where('created_at', '>=', date('Y-m').'-01 00:00:00')->count();
        $LastCreatedActivity = Activity::orderBy('created_at', 'desc')->first();


        if(session('is_logged_in') == true){
            return view('dashboard',
            [
                'TotalNumberOfAnnouncements' => $TotalNumberOfAnnouncements,
                'TotalAnnCreated_atToday' => $TotalAnnCreated_atToday,
                'TotalAnnCreated_atThisMonth' => $TotalAnnCreated_atThisMonth,
                'LastCreatedAnnouncement' => $LastCreatedAnnouncement,
                'TotalNumberOfNews' => $TotalNumberOfNews,
                'TotalNewsCreated_atToday' => $TotalNewsCreated_atToday,
                'TotalNewsCreated_atThisMonth' => $TotalNewsCreated_atThisMonth,
                'LastCreatedNews' => $LastCreatedNews,
                'TotalNumberOfActivity' => $TotalNumberOfActivity,
                'TotalActivityCreated_atToday' => $TotalActivityCreated_atToday,
                'TotalActivityCreated_atThisMonth' => $TotalActivityCreated_atThisMonth,
                'LastCreatedActivity' => $LastCreatedActivity
            ]
        );
        }
        return redirect('/login');
    }
}
