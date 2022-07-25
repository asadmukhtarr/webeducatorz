<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('lms.profile');
    }

    public function enrolled_courses(){
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
}
