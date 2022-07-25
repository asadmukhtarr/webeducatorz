<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general;

class loginController extends Controller
{
    //
    public function login(){
        $meta = general::find(1);
        return view('login.login',compact('meta'));
    }
}
