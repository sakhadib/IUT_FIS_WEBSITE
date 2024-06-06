<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\activity;

class activity_Controller extends Controller
{
    public function index()
    {
        $activities = activity::all();

        if($activities->isEmpty())
            return redirect('/');
    

        return view('activity', ['activities' => $activities]);
    }

    public function show($id)
    {
        $activity = activity::find($id);

        if($activity == null)
            return redirect('/activities');

        return view('ind_activity', ['activity' => $activity]);
    }
}
