<?php

namespace App\Http\Controllers\badges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\trainer;
use App\Models\badge;
use App\Models\room;
use App\Models\slot;
use App\Models\enrollment;
use App\Models\assigntrainer;
use App\Models\lecture;
use App\Models\general;
use Mail;
class badgesController extends Controller
{
    // show all badges
    public function index(){

        $badges = badge::orderby('id','desc')->get();
        return view('admin.badges.badges',compact('badges'));
    }
    // create badge ..
    public function create(Request $request){
        // create badges
        $courses  = course::orderby('id','desc')->get();
        $trainers = trainer::orderby('id','desc')->get();
        $slots    = slot::all();
        $rooms    = room::all();
        return view('admin.badges.create', compact('courses','trainers','slots','rooms'));
    }
    // show badge
    public function show($id){
        // badges ..
        $badge = badge::find($id);
        $lectures = lecture::where('badge_id',$id)->get();
        $enrolments = enrollment::where('badge_id',$badge->id)->get();
        return view('admin.badges.badge', compact('badge','enrolments','lectures'));
    
    }
    // code
    public function code($id){
        $code = course::find($id)->code;
        $fee = course::find($id)->fee;
        $badge_c = badge::where('course_id',$id)->count();
        $badge_c = $badge_c + 1;
        $badgecode = $code.'-'.$badge_c;
        $c = array(
            'code' => $badgecode,
            'fee'  => $fee
        );
        return $c;
    }
    public function lecture($id){
        $badge = badge::find($id);
        $course = $badge->course_id;
        $lectures = lecture::where('badge_id',$badge->id)->orderby('id','desc')->get();
        return view('admin.badges.lecture',compact('badge','lectures'));
    }
    public function addlecture(Request $request){
        $this->validate($request,[
            'topic' => 'required',
            'link' => 'required'
        ]);
        $lecture =new lecture;
        $lecture->course_id=$request->course_id;
        $lecture->badge_id=$request->badge_id;
        $lecture->title=$request->topic;
        $lecture->lecture= $this->YoutubeID($request->link);
        $lecture->save();
        return redirect()->back();
    }
    public function deletelecture($id){
        $delete = lecture::where('id',$id)->first();
        $delete->delete();
        return redirect()->back();
    }
    function YoutubeID($url){
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }

    public function edit($id){
        $badge = badge::find($id);
        $courses  = course::orderby('id','desc')->get();
        $trainers = trainer::orderby('id','desc')->get();
        $slots    = slot::all();
        $rooms    = room::all();
        return view('admin.badges.edit', compact('badge','courses','trainers','slots','rooms'));
    }
    public function update($id, Request $request){
        $validated = $request->validate([

            'description' => 'required',
            'bcourse' => 'required',
            'code'  => 'required',
            'trainer'  => 'required',
            'fee'  => 'required',
            'sdate'  => 'required',
            'edate'  => 'required',
            'room'  => 'required',
            'slot'  => 'required',
            'status' => 'required',
            'days' => 'required',

        ]);
        $badge = badge::find($id);
        $badge->course_id   =  $request->bcourse;
        $badge->description = $request->description;
        $badge->code  = $request->code;
        $badge->days  = $request->days;
        $badge->start = $request->sdate;
        $badge->end   = $request->edate;
        $badge->trainer_id = $request->trainer;
        $badge->fee   =   $request->fee;
        $badge->status  = $request->status;
        $badge->room_id = $request->room;
        $badge->slot_id = $request->slot;
        $badge->save();
        $assigntrainer = assigntrainer::where('badge_id',$id)->first();
        $assigntrainer->badge_id = $badge->id;
        $assigntrainer->trainer_id = $request->trainer;
        $assigntrainer->course_id  = $request->bcourse;
        $assigntrainer->save();
        if($request->status == 2){
            $enrolments = enrollment::where('badge_id',$id)->get();
            foreach($enrolments as $enrolment){
                $enrolment = enrollment::find($enrolment->id);
                $enrolment->status = "completed";
                $enrolment->save();
            }
        }
        return redirect(route('badge',$id))->with('message','Badge updated Successfully');

    }

    public function save(Request $request){
        $validated = $request->validate([

            'description' => 'required',
            'bcourse' => 'required',
            'code'  => 'required',
            'trainer'  => 'required',
            'fee'  => 'required',
            'sdate'  => 'required',
            'edate'  => 'required',
            'room'  => 'required',
            'slot'  => 'required',
            'days' => 'required'

        ]);
        $badge = new badge;
        $badge->course_id =  $request->bcourse;
        $badge->description = $request->description;
        $badge->code = $request->code;
        $badge->start = $request->sdate;
        $badge->end   = $request->edate;
        $badge->trainer_id = $request->trainer;
        $badge->fee  =   $request->fee;
        $badge->room_id = $request->room;
        $badge->slot_id = $request->slot;
        $badge->days = $request->days;
        
        $trainer = trainer::where('id',$request->trainer)->first();
        $course = course::where('id',$request->bcourse)->first();
        $general = general::where('id',1)->first();

        $badge->save();
        $assigntrainer = new assigntrainer;
        $assigntrainer->badge_id = $badge->id;
        $assigntrainer->trainer_id = $request->trainer;
        $assigntrainer->course_id  = $request->bcourse;
        $assigntrainer->save();
        /*
        $data = array('date' => $request->sdate , 'badge' => $request->bcourse,  'course_name' => $course->title , 'course_code' => $course->code ,'duration' => $course->duration , 'days' => $request->days);
        $user['to'] = array($trainer->email,$general->email1);
        Mail::send('emails.email',$data,function($message) use ($user,$request){
            $message->to($user['to']);
            $message->subject('hello world');
        });
        */
        return redirect(route('badges'))->with('message','Badge Create Successfully');
    }
    public function delete($id){
        $badge = bagde::find($id);
        $enrolments = enrollment::where('badge_id',$id)->get();
        foreach($enrolments as $enrolment){
            $enrolment->delete();
        }
        $badge->delete();
        return redirect()->back()->with('message',);
    }
}
