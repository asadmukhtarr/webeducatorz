<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\general;
use App\Models\user;
use Auth;
use Hash;

class settingsController extends Controller
{
    // profile ..
    public function profile(){

        return view('admin.settings.profile');
    }
    // passwords ..
    public function password(){

        return view('admin.settings.password');
    }
    // change password
    public function changePassword(request $request){
        $tpassword = user::find(Auth::id());
        $tpassword->password = Hash::make($request->password);
        $tpassword->save();
        return redirect()->back()->with('message','Password Changed Successfully');
    }
    // general settings 
    public function general(){
        $general = general::find(1);
        return view('admin.settings.general',compact('general'));
    }
    // save meta tags
    public function savemeta(Request $request){
        $validated = $request->validate([
            'description' => 'required',
            'tags' => 'required',
            'whatsapp' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'title' => 'required',
            'email1' => 'required',
            'email' => 'required'
        ]);
        $logo = 0; $icon = 0;
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('png');
            Storage::disk('public')->put($imageName, $img);
            $logo = 1;
        }
        if($request->has('icon')){
            $ic = time().'.'.$request->icon->extension(); 
            $imgc  = ImageManagerStatic::make($request->icon)->encode('png');
            Storage::disk('public')->put($ic, $imgc);
            $icon = 1;
        }

        $general = general::find(1);
        if($logo == 1){
            $general->logo  =  $imageName;
        }
        if($icon == 1){
            $general->icon  = $ic;
        }
        $general->title = $request->title;
        $general->description = $request->description;
        $general->tags = $request->tags;
        $general->phone = $request->whatsapp;
        $general->phone1 = $request->phone;
        $general->email = $request->email;
        $general->email1 = $request->email1;
        $general->address = $request->address;
        $general->save();
        return redirect()->back()->with('message','Updated Meta Details Succesfully');
    }
}
