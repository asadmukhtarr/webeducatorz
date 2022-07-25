<?php

namespace App\Http\Controllers\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class salariesController extends Controller
{
    //
    public function index(){
        return view('admin.accounts.salaries');
    }
}
