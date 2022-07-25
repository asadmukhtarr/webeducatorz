<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\badge;
use App\Models\Blog;
use App\Models\general;
use stdClass;
use App\Models\contact;
use App\Models\applyOnine;
use Mail;


class coursesController extends Controller
{
    //
       //
       public function courses(){
        $courses = course::where('status','1')->orderby('id','desc')->get();
        $meta = general::find(1);
        return view('courses', compact('courses','meta'));
    }
    // fee structure ..
    public function fee(){
        $courses = course::orderby('id','desc')->get();
        $meta = general::find(1);
        return view('structure',compact('courses','meta'));
    }
    // show
    public function show($slug = ''){
        $course = course::where('slug',$slug)->first();
        if (!empty($course->tags)) {
            $meta = new stdClass();
            $meta->tags = $course->tags;
            $meta->description = $course->meta;
            $meta->title = $course->title;
            
        } else {
 
           $meta = general::find(1);
        }

        return view('courses.course',compact('course','meta'));
    }

    // schedule
    public function schedule(){

        $badges = badge::where('status','0')->orderby('id','desc')->get();
        $meta = general::find(1);
        return view('schedual',compact('badges','meta'));
    }
     // contact
    public function contact(){
        $meta = general::find(1);
        return view('contact',compact('meta'));
    }
    public function contactMessage(Request $request){

        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'department' => 'required|alpha',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);

        $sendmsg = new contact;
        $sendmsg->name  = $request->name;
        $sendmsg->email = $request->email;
        $sendmsg->department = $request->department;
        $sendmsg->phone = $request->phone;
        $sendmsg->message = $request->message;
        $sendmsg->save();
        return redirect(route('contact'))->with('message','Message Sent Successfully');

    }

    // apply online
    public function apply(){
        $courses = course::all();
        $meta = general::find(1);
        return view('admission')->with(compact('courses','meta'));
    }
    public function onlineAdmit(Request $request){
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'city'  => 'required|alpha',
            'degree'=> 'required',
            'marketing' => 'required',
            'course' => 'required'

        ]);
        $addstu = new applyOnine;
        $addstu->name = $request->name;
        $addstu->email = $request->email;
        $addstu->phone = $request->phone;
        $addstu->city = $request->city;
        $addstu->degree = $request->degree;
        $addstu->marketing = $request->marketing;
        $addstu->course = $request->course;
       
        $data = $request->all();
        //$data = array('fname'=> $request->name , 'email' => $request->email , 'degree' => $request->degree, 'course' => $request->course);
        $user['to'] = $request->email;
        $user['name'] = $request->name;
        $user['from'] = general::find(1)->email1;
        Mail::send('email.email',$data,function($message) use ($user,$request){
            $message->to($user['to']);
            $message->subject('We Received Your Admission Request On Our Website');
            $message->from($user['from'],'Hellow '.$user['name']);
        });
        $addstu->save();
        return redirect(route('apply.online'))->with('message','Thank You For Apply Skillinsiderz, You Will Get Response In 2 Hours.');
    }
}
