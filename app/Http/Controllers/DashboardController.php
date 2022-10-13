<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrailForm;
use App\Models\general;
use App\Models\Lecture;
use App\Models\badge;
use App\Models\student;
use App\Models\workshop;
use App\Models\User;
use App\Models\blog;
use App\Models\assignment;
use App\Models\task;
use Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function profile(){
        $courses =  Auth::user()->student->enrollment;
        return view('lms.profile',compact('courses'));
    }

    public function dashbaord(){
        $balance = Auth::user()->student->fee->sum('pending');
        $paid = Auth::user()->student->fee->sum('paid');
        $total = Auth::user()->student->fee->sum('total_amount');
        $accounts = Auth::user()->student->fee;
        $all_courses =  Auth::user()->student->enrollment->count();
        $courses =  Auth::user()->student->enrollment;
        $events = workshop::orderBy('id','DESC')->limit(5)->get();
        $batches = badge::where('status',0)->limit(5)->get();
        $fees = Auth::user()->student->fee;
        return view('lms.dashboard', compact('fees','batches','events','accounts','balance','paid','total','all_courses','courses'));
        $active_courses = enrollment::where('student_id',Auth::user()->student->id)->where('status','active')->count() ;
        $completed_courses = enrollment::where('student_id',Auth::user()->student->id)->where('status','completed')->count() ;
        
        return view('lms.dashboard', compact('accounts','balance','paid','total','all_courses','active_courses','completed_courses'));
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
        $fees = Auth::user()->student->fee;
        return view('lms.accounts', compact('fees','balance','paid','total'));
    }

    public function workshops(){
        $events = workshop::orderBy('id','DESC')->get();
        return view('lms.workshops', compact('events'));
    }

    public function feeds(){
        $events = blog::orderBy('id','DESC')->get();
        return view('lms.feeds', compact('events'));
    }

    public function Settings(){
        return view('lms.settings');
    }
    // ASSIGNMENTS  
    public function assignments(){
        $enrollments =  Auth::user()->student->enrollment;
        return view('lms.assignment',compact('enrollments','total','gain'));
    }
    public function submit_assignments($id,Request $request){
        $request->validate([
            'answer' => 'required|mimes:zip',
        ]);
        $file= $request->file('answer');
        $filename= time().$file->getClientOriginalName();
        $file->move('storage/app/assignment/',$filename);  
        $task = task::where('assignment_id',$id)->where('user_id',Auth::id())->first();
        $task->answer = $filename;
        $task->status = 1;
        $task->save();
        return redirect()->back()->with('message','Your Assignment Submitted Successfully And You Cant Edit Or Update Now');
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
        return redirect(route('home'));
    }

    public function update_user(Request $request,$id){
        $i = 0;
        if(!empty($request->file('image'))){
            $file= $request->file('image');
            $filename= time().$file->getClientOriginalName();
            $file->move('storage/app/public/',$filename);   
            $i=1;
        }
        $update = User::where('id',$id)->first();
        if($i == 1){
            $update->thumbnail = $filename;
        }
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->desrciption = $request->description;
        $update->save();

        $std_update = student::where('user_id',$id)->first();
        $std_update->name = $request->name;
        $std_update->email = $request->email;
        $std_update->phone = $request->phone;
        $std_update->address = $request->address;
        $std_update->city = $request->city;
        $std_update->state = $request->state;
        $std_update->country = $request->country;
        $std_update->save();

        return redirect()->back()->with('message','Your Profile Is Updated Successfully');
    }
    // update password ..
    function update_password(Request $request){
        $this->validate($request, [
            'cpassword' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        if (!(Hash::check($request->cpassword, Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        } else {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->With('message','Password Updated Successfully');
        }
    }
    // trail ..

}
