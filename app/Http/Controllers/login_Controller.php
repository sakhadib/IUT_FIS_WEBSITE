<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\Reporter;

class login_Controller extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'sid' => 'required',
            'password' => 'required'
        ]);

        $member = Member::where('student_id', $request->sid)->first();

        if(!$member){
            return back()->with('status', 'Student ID not found');
        }

        $reporter = Reporter::where('member_id', $member->id)->first();

        if($reporter->is_pass_changed == 0){
            return view('change_password', ['reporter' => $reporter, 'member' => $member]);
        }

        if($reporter->password == md5($request->password)){
            session(['reporter_id' => $reporter->id,
                     'member_id' => $member->id,
                    'is_logged_in' => true]);
            return redirect('/');
        }
    }

    public function changePassword(Request $request){
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required',
            'reporter_id' => 'required'
        ]);

        if($request->password != $request->password_confirmation){
            return back()->with('status', 'Passwords do not match');
        }

        $reporter = Reporter::find($request->reporter_id);

        if(!$reporter){
            return back()->with('status', 'Reporter not found');
        }

        $reporter->password = md5($request->password);
        $reporter->is_pass_changed = 1;
        $reporter->save();

        return redirect('/login')->with('status', 'Password changed successfully');
    }


    public function logout(){
        session()->forget('reporter_id');
        session()->forget('member_id');
        session()->forget('is_logged_in');
        return redirect('/');
    }
}
