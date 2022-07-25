<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general;
use App\Models\course;
use App\Models\workshop;

class welcomeController extends Controller
{
    //
      // welcome ..
      public function welcome(){
        $meta = general::find(1);
        $courses = course::orderby('id','desc')->get();
        $workshops = workshop::orderby('id','desc')->limit(4)->get();
        return view('welcome',compact('meta','courses','workshops'));
    }
}
