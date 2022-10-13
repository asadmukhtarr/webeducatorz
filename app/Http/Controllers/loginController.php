<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // 
    public function login()
    {
        $meta = general::find(1);
        return view('login.login', compact('meta'));
    }

    public function authlogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_student == '1') {
                //return "Student is here";
                return redirect()->route('dashboard');
            } else if(auth()->user()->is_teacher == '1'){
                return redirect()->route('teacher.dashboard');
            } else {
                return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
            }
        }else{
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function dashboard(){
        return view('lms.dashboard');
    }
}
