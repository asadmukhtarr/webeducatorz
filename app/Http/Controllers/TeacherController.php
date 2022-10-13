<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\badge;
use App\Models\lecture;
use App\Models\assignment;
use App\Models\task;
class TeacherController extends Controller
{
    //
    function dashbaord(){
        $batches = Auth::user()->trainer->badges->count();
        $badges = Auth::user()->trainer->badges;
        // batches ..
        $students = 0;
        foreach($badges as $badge){
            $students = $badge->student->count();
            $students = $students + $students;
        }
        $courses = Auth::user()->trainer->category->course->count();
        return view('teacher.dashboard', compact('batches','students','courses'));
    }
    function courses(){
        $batches = Auth::user()->trainer->badges;
        return view('teacher.courses',compact('batches'));
    }
    function course_details($id){
        $batch = badge::find($id);
        $students = badge::find($id)->student;
        return view('teacher.batch_details', compact('batch','students'));
    }

    function assingments(){
        $batches = Auth::user()->trainer->badges;
        $assignments = Auth::user()->assignments;
        return view('teacher.assignments',compact('batches','assignments'));
    }
    function save_assignment(Request $request){
        $request->validate([
            'title' => 'required',
            'last_date' => 'required',
            'batch' => 'required',
            'total' => 'required',
        ]);
        
        $batch = badge::find($request->batch);
        $batch = $batch->course->title.' '.$batch->code;
        $badge = badge::find($request->batch);
        // start assignment
        $assignment = new assignment;
        $assignment->title = $request->title;
        $assignment->last_date = $request->last_date;
        $assignment->badge_id = $request->batch;
        $assignment->user_id = Auth::id();
        $assignment->total = $request->total;
        $assignment->save();
        // end assignment
        foreach ($badge->student as $student) {
            # code...
            //echo $student->student->status.'<br />';
            if($student->status == "active"){
                $task = new task;
                $task->assignment_id = $assignment->id;
                $task->user_id = $student->student->user_id;
                $task->save();
            }
            
        }
       return redirect()->back()->with('message','Assigment Publish Successfully For '.$batch);
    }
    // save ..
    public function task_status($id,Request $request){
        $request->validate([
            'gain' => 'required',
        ]);
        $task = task::find($id);
        $task->gain = $request->gain;
        $task->status = 1;
        $task->save();
        return redirect()->back()->with('message','Marks Added Successfully');
    }
    // delete assignment 
    function delete_assignment($id){
        $assignment = assignment::find($id);
        $tasks = task::where('assignment_id',$id)->get();
        foreach($tasks as $task){
            $task->delete();
        }
        $assignment->delete();
        return redirect()->back()->with('message','Assignments And Tasks Deleted Successfully');
    }
    function close_assignment($id){
        $assignment = assignment::find($id);
        $assignment->status = 1;
        $assignment->save();
        return redirect()->back()->with('message','Assignment is closed');
    }

    function assignment($id){
        $assignment = assignment::find($id);
        return view('teacher.assignment',compact('assignment'));
    }

    function accounts(){
        return view('teacher.accounts');
    }
    function feeds(){
        return view('teacher.feeds');
    }
    function profile(){
        return view('teacher.profile');
    }
    function settings(){
        return view('teacher.settings');
    }
    
}
