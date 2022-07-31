<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrailForm;
use App\Models\general;
use App\Models\Lecture;
use App\Models\badge;
use App\Models\workshop;
use Auth;

class DashboardController extends Controller
{
    public function profile(){
        return view('lms.profile');
    }

    public function dashbaord(){
        $balance = Auth::user()->student->fee->sum('pending');
        $paid = Auth::user()->student->fee->sum('paid');
        $total = Auth::user()->student->fee->sum('total_amount');
        $accounts = Auth::user()->student->fee;
        $courses =  Auth::user()->student->enrollment;
        $course = $courses->count();
        $active =  Auth::user()->student->enrollment->badge->count();
        return $course - $active ;

        return view('lms.dashboard', compact('accounts','balance','paid','total'));
    }

    public function enrolled_courses(){
        $courses =  Auth::user()->student->enrollment;
        return view('lms.enrolled_courses',compact('courses'));
    }

    public function lessondetails($id){
        $meta = general::find(1);
        $lectures = Lecture::where('badge_id',$id)->get();
        $flecture = Lecture::where('badge_id',$id)->first();
        $course = badge::find($id)->course;
        return view('lms.lesson-details', compact('meta','lectures','course','flecture'));
    }

    public function newadmissions(){
        return view('lms.new_admissions');
    }

    public function accounts(){
        $balance = Auth::user()->student->fee->sum('pending');
        $paid = Auth::user()->student->fee->sum('paid');
        $total = Auth::user()->student->fee->sum('total_amount');
        $accounts = Auth::user()->student->fee;
        return view('lms.accounts', compact('accounts','balance','paid','total'));
    }

    public function workshops(){
        $events = workshop::orderBy('id','DESC')->get();
        return view('lms.workshops', compact('events'));
    }

    public function feeds(){
        $events = workshop::orderBy('id','DESC')->get();
        return view('lms.feeds', compact('events'));
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
