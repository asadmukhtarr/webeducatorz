<?php

namespace App\Http\Controllers\academics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  DB;
class onlineadmissionsController extends Controller
{
    //
    public function index(){
        $admissions = DB::table('apply_onines')->where('status','0')->orderby('id','desc')->get();
        return view('admin.academics.onlineadmissions',compact('admissions'));
    }
    public function application($id){
        $aboutstudent = DB::table('apply_onines')->where('id',$id)->first();
        return view('admin.academics.aboutstudents',compact('aboutstudent'));

    }
    public function aboutStudent(Request $request,$id){
        $descnote = DB::table('apply_onines')->where('id',$id)->update(['note'=>$request->note,'status'=>1]);
        return redirect(route('add.student'));
        // DB::table('apply_onines')->save();

    }
    public function disappearStudent($id){
        $disappear = DB::table('apply_onines')->where('id',$id)->update(['status'=>2]);
        return redirect()->back();
    }
}
