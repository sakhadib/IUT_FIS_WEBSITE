<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class announcement_Controller extends Controller
{
    public function index(){
        return view('announcements');
    }
}
