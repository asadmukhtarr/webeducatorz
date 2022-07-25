<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    // login page
    public function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
    }
    // login process
    public function adminLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $check = [
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1,
        ];
        if(Auth::attempt($check)){
            return redirect(route('dashboard'));
        }else{
            return redirect()->back()->with('message','These Cresidetials not matched.');
        }
    }
    // logout
    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
