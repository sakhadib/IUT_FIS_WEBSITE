<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_Controller extends Controller
{
    public function index()
    {
        if(session('is_logged_in') == true){
            return view('dashboard');
        }
        return redirect('/login');
    }
}
