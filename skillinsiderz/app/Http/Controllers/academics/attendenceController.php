<?php

namespace App\Http\Controllers\academics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class attendenceController extends Controller
{
    //
    public function index(){

        return view('admin.academics.attendence');
    }
}
