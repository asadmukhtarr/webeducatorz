<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrailForm;
use Auth;

class DashboardController extends Controller
{
    public function profile(){
        return view('lms.profile');
    }

    public function dashbaord(){
        return view('lms.dashboard');
    }

    public function enrolled_courses(){
        $courses =  Auth::user()->student->enrollment;
        return $courses->badge;
        return view('lms.enrolled_courses');
    }

    public function newadmissions(){
        return view('lms.new_admissions');
    }

    public function accounts(){
        return view('lms.accounts');
    }

    public function workshops(){
        return view('lms.workshops');
    }

    public function feeds(){
        return view('lms.feeds');
    }

    public function Settings(){
        return view('lms.settings');
    }

    public function trail_form(Request $request){
        // $request->validate([
        //     'name' => 'required|alpha',
        //     'email' => 'required|email',
        //     'department' => 'required|alpha',
        //     'phone' => 'required|numeric',
        //     'message' => 'required'
        // ]);

        $sendmsg = new TrailForm();
        $sendmsg->name  = $request->name;
        $sendmsg->email = $request->email;
        $sendmsg->no = $request->no;
        $sendmsg->subject = $request->subject;
        $sendmsg->save();
    }
}
