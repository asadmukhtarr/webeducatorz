<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use App\Models\designation;
use App\Models\staff;
use App\Models\general;
use Mail;
class staffsController extends Controller
{
    // create ..
    public function create(){
        $designations = designation::all();
        return view('admin.staff.create', compact('designations'));
    }
    public function editstaff($id){

        $staff = staff::find($id);
        $designations = designation::all();
        return view('admin.staff.edit', compact('staff','designations'));
    }

    public function update($id, Request $request){
        $validated = $request->validate([
            'name'  => 'required',
            'description'=> 'required',
            'designation' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'phone' => 'required',
            'ec' => 'required',
            'cnic' => 'required',
            'address' => 'required',
            'status' => 'required'
        ]);

        $i = 0;
        if($request->has('image')){
            // profile photo
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
            $i = 1;
        }

        $staff = staff::find($id);
        $staff->name = $request->name;
        if($i == 1){
            $staff->thumbnail = 'storage/'.$imageName;
        }   
        $staff->description = $request->description;
        $staff->designation_id = $request->designation;
        $staff->email         = $request->email;
        $staff->phone         = $request->phone;
        $staff->salary        = $request->salary;
        $staff->cnic          = $request->cnic;
        $staff->status          = $request->status;
        $staff->address       = $request->address;
        $staff->ec            = $request->ec;  
        $staff->save();
        return redirect(route('staff.managment'))->with('message','Employee Updated Succesfully');
    }
    public function addstaff(Request $request){

        $validated = $request->validate([
            'image'  => 'required',
            'name'  => 'required',
            'description'=> 'required',
            'designation' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'phone' => 'required',
            'ec' => 'required',
            'cnic' => 'required',
            'address' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $staff = new staff;
        $staff->name = $request->name;
        $staff->thumbnail =  'content/'.$imageName;;
        $staff->description = $request->description;
        $staff->designation_id = $request->designation;
        $staff->email         = $request->email;
        $staff->phone         = $request->phone;
        $staff->salary        = $request->salary;
        $staff->cnic          = $request->cnic;
        $staff->address       = $request->address;
        $staff->ec            = $request->ec;  
        $staff->save();
        $general = general::where('id',1)->first();
        $data = array('salary' => $request->salary);
        $user['to'] = array($request->email ,$general->email1);
        Mail::send('emails.staffmail',$data,function($message) use ($user,$request){
            $message->to($user['to']);
            $message->subject('hello world');
        });
        
        return redirect(route('staff.managment'))->with('message','Employee Added Succesfully');
    }
    // management
    public function management(){
        $staffs = staff::orderby('id','desc')->get();
        return view('admin.staff.managment',compact('staffs'));

    }
    // designation
    public function designations(){
        $designations = designation::all();
        return view('admin.designation.designation',compact('designations'));
    }
    // create ..
    public function createdesignation(Request $request){
        $validated = $request->validate([
            'designation'  => 'required'
        ]);
        $designation = new designation;
        $designation->name = $request->designation;
        $designation->save();
        return redirect()->back()->with('message','Designation Added Successfully');
    }
}
