<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\visit;
use App\Models\student;
class findController extends Controller
{
    //
    public function visit(Request $request){
        $courses = course::all();
        if(!empty($request->name) && empty($request->course) && empty($request->phone) && empty($request->apply) ){
            $visits = visit::where('name','like','%'.$request->name.'%')->get();
        } elseif(empty($request->name) && !empty($request->course) && empty($request->phone) && empty($request->apply)){
            $visits = visit::where('course_id',$request->course)->get();
        } elseif(empty($request->name) && empty($request->course) && !empty($request->phone) && empty($request->apply)){
            $visits = visit::where('phone',$request->phone)->get();
        } elseif(empty($request->name) && empty($request->course) && empty($request->phone) && !empty($request->apply)){
            $visits = visit::where('created_at',date($request->apply))->get();
        } elseif(!empty($request->name) && !empty($request->course) && empty($request->phone) && empty($request->apply)){
            $visits = visit::where('name',$request->name)->where('course_id',$request->course)->get();
        } else if(!empty($request->name) && !empty($request->course) && !empty($request->phone) && empty($request->apply)){
            $visits = visit::where('name',$request->name)->where('course_id',$request->course)->where('phone',$request->phone)->get();
        } elseif(!empty($request->name) && !empty($request->course) && !empty($request->phone) && !empty($request->apply)) {
            $visits = visit::where('name',$request->name)->where('course_id',$request->course)->where('phone',$request->phone)->where('create_at',date($request->apply))->get();
        } else {
            $visits = visit::orderby('id','desc')->get();
        }
        return view('admin.academics.visits',compact('visits','courses'));
    }
    public function student(Request $request){
        if(!empty($request->name) && !empty($request->phone)){
            $students = student::where('name','like','%'.$request->name.'%')->where('phone','like','%'.$request->phone.'%')->first();
        } elseif(!empty($request->name) && empty($request->phone)) {
            $students = student::where('name','like','%'.$request->name.'%')->first();
        } else if(empty($request->name) && !empty($request->phone)){
            $students = student::where('phone','like','%'.$request->phone.'%')->first();
        } else {
            $students = student::orderby('id','desc')->get();
        }
        return $students;
        return view('admin.students.students',compact('students'));
    }
}
