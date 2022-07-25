<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course;
use App\Models\badge;
use App\Models\workshop;
use App\Models\visit;
use App\Models\enrollment;
use App\Models\staff;
use App\Models\trainer;
use Carbon\Carbon;
use Auth;
class DashboardController extends Controller
{
    // Dashboard ..
    public function index(Request $request){
       if(Auth::check()){
        $students = student::all();
        $students = $students->count();
        $courses = course::all();
        $courses = $courses->count();
        $badges = badge::all()->count();
        $workshops = workshop::all()->count();
        $today_visits = visit::whereDate('created_at', Carbon::today())->get()->count();
        $today_enrollments = enrollment::whereDate('created_at', Carbon::today())->get()->count();
        $today_workshops = workshop::whereDate('created_at', Carbon::today())->get()->count();
        $staff = staff::all()->count();
        $trainer = trainer::all()->count();
        $new_enrollments = enrollment::whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',Carbon::now()->year)->get()->count();
        $new_badges = badge::whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',Carbon::now()->year)->get()->count();
        $new_workshops = workshop::whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',Carbon::now()->year)->get()->count();
        $workshops_list = workshop::all();
        $badges_list = badge::orderby('id','desc')->get();

        return view('admin.dashboard', compact('students','courses','badges','workshops','today_visits','today_enrollments','today_workshops','staff','trainer','new_enrollments','new_badges','new_workshops','workshops_list','badges_list'));
       } else {
       	return view('welcome');
       }
        
       
        
    
    }
}
