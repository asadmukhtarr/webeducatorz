<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\badge;
use App\Models\enrollment;
use App\Models\student;
use App\Models\fee;
use App\Models\instalment;
use Illuminate\Support\Facades\File;
use PDF;
use Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\balance;
use App\Models\general;
class studentsController extends Controller
{
    // all students ..
    public function index(){
        $students = student::orderby('id','desc')->get();
        $courses = course::orderBy('id','DESC')->get();
        return view('admin.students.students')->with(compact('students','courses'));
    }
    public function exist(){
        $courses = course::all();
        $students = student::orderby('id','desc')->get();
        return view('admin.students.exist', compact('courses','students'));
    }
    public function exsave(Request $request){
        $validated = $request->validate([
            'course_id' => 'required',
            'badge_id' => 'required',
            'student_id' => 'required',
            'stuid' => 'required'

        ]);
        $enrollment = new enrollment;
        $enrollment->course_id  =  $request->course_id;
        $enrollment->badge_id   =  $request->badge_id;
        $enrollment->student_id =  $request->student_id;
        $enrollment->stuid      =  $request->stuid;
        $enrollment->save();
        $fee = new fee;
        $fee->enrollment_id = $enrollment->id;
        $fee->save();
        return redirect(route('fee.detail',$enrollment->id))->with('message','Thank You For Enrollment Of Existing Student, Please Fees Format');
    }

    public function badge($id){
        $badge = badge::where('course_id',$id)->get();
        return $badge;
    }
    public function student($id){
        $badge = badge::find($id)->code;
        $student = enrollment::where('badge_id',$id)->get();
        $student = $student->count();
        $student = $student + 1;
        $stucode = $badge.'-'.$student;
        return $stucode;
    }
    // create student ..
    public function create(){
        $courses = course::all();
        return view('admin.students.addstudent', compact('courses'));
    }
    // show student ..
    public function show($id){
        $student = student::find($id);
        $courses = course::all();
        return view('admin.students.student', compact('student','courses'));
    }
    public function feedetails($id){
       $enrollment = enrollment::find($id);
       return view('admin.students.fee.details',compact('enrollment'));
    }
    public function feeinstallmentdetails($id){
       $fee = fee::find($id);
       return view('admin.students.fee.installment', compact('fee'));
    }

    public function invoicef($id){
        $tmp_path = date('Y-m');
        if (!File::exists(storage_path('public/').$tmp_path)) {
            File::makeDirectory(storage_path('public/').$tmp_path,0777,true);
        }
        return $id;
    }
    public function pay($id, Request $request){
        
        if($request->update == "paid"){
            $validated = $request->validate([
                'last_date' => 'required',
                'update' => 'required',
                'method' => 'required'
    
            ]);
    
            $installment = instalment::find($id);
            $installment->status = "paid";
            $installment->last_day = $request->last_date;
            $installment->method   = $request->method;
            $installment->save();
            $fee = fee::find($installment->fee_id);
            $paid = $fee->paid + $installment->amount;
            $pen = $fee->pending - $installment->amount;
            $fee->paid = $paid;
            $fee->pending = $pen;
            $fee->save();
            $enrollment = enrollment::find($fee->enrollment_id);
            if($enrollment->status == "pending"){
                $enrollment->status = "active";
                $enrollment->save();    
            }
            $balance = balance::find(1);
            $bal = $balance->balance + $installment->amount;
            $pen = $balance->pending -$installment->amount; 
            $balance->balance = $bal;
            $balance->pending = $pen;
            $balance->save();
            $tmp_path = date('Y-m');
            if (!File::exists(storage_path('public/').$tmp_path)) {
                File::makeDirectory(storage_path('public/').$tmp_path,0777,true);
            }
            $data = fee::find($installment->fee_id);
            $pdf = PDF::loadView('pdf.invoice', array('data' =>$data));
            $file_name = $tmp_path . '/' .$data->student->name.'-'.$data->instalment_no. '.pdf';
            $pdf->save(storage_path('public/').$file_name);
            $installment = instalment::find($id);
            $installment->invoice =  $file_name;
            $installment->save();
            return redirect()->back()->with('message',$installment->instalment_no.' Installment is paid');
        } else {
            $validated = $request->validate([
                'last_date' => 'required',
                'update' => 'required'
    
            ]);
    
            $installment = instalment::find($id);
            $installment->last_day = $request->last_date;
            $installment->save();
            return redirect()->back()->with('message',$installment->instalment_no.' Installment last date updated');
        }
    }

    public function invoice($id){

        $installment = instalment::find($id);
        $file = $installment->invoice;
        $path = storage_path('public/'.$file);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($path, $installment->student->name.'-'.$installment->instalment_no . '.pdf', $headers);
    }

    public function instalments($id , Request $request){
        $request->validate([
            'type' => 'required',
            'inst' => 'required',
            'adm' => 'required'
        ]);
        $fee = $request->fee;
        $inst = $fee/$request->inst;
        $enrollment = enrollment::find($id);
        
        $fee = new fee;
        $fee->student_id = $enrollment->student_id;
        $fee->badge_id   = $enrollment->badge_id;
        $fee->course_id  = $enrollment->course_id;
        $fee->noi        = $request->inst;
        $fee->regular_fee = $request->fee;
        $fee->admission_fee = $request->adm; 
        $fee->total_amount  = $request->fee + $request->adm;
        $fee->paid          = 0;
        $fee->pending       = $request->fee + $request->adm;
        $fee->fee_type      = $request->type;
        $fee->enrollment_id = $enrollment->id;
        $fee->save();

        $balance = balance::find(1);
        $p = $balance->pending + $fee->pending;
        $balance->pending = $p;
        $balance->save();
        $fee_id = $fee->id;
        $installment = new instalment;
        $installment->fee_id = $fee_id;
        $installment->student_id = $enrollment->student_id;
        $installment->course_id = $enrollment->course_id;
        $installment->badge_id  = $enrollment->badge_id;
        $installment->amount    = $request->adm; 
        $installment->type = "admission fee";
        $installment->instalment_no = 1;
        $installment->save();
        
        for ($i=1; $i <=$request->inst; $i++) { 

            $installment = new instalment;
            $installment->fee_id = $fee_id;
            $installment->student_id = $enrollment->student_id;
            $installment->course_id = $enrollment->course_id;
            $installment->badge_id  = $enrollment->badge_id;
            $fee = $request->fee;
            $inst = $fee/$request->inst;
            $installment->amount    = $inst;
            $installment->type = "installment";
            $installment->instalment_no = $i+1;
            $installment->save();
            
        } 
        return redirect(route('inst.detail',$fee_id))->with('message','Add Installments Schedule');
    }
    // save 
    public function save(Request $request){
        $validated = $request->validate([
            
            'reference' => 'required',
            'name'  => 'required',
            'stuid'  => 'required',
            'email' => 'required',
            'trainer_contact' => 'required',
            'trainer_cnic' => 'required',
            'gender' => 'required',
            'fname' => 'required',
            'fcontact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'degree' => 'required',
            'institute' => 'required',
            'year' => 'required',
        ]);
        // student ..
        $student = new student;
        $student->name = $request->name;
        $student->reference = $request->reference;
        $student->stuid     = $request->stuid;
        $student->email     = $request->email;
        $student->phone = $request->trainer_contact;
        $student->cnic = $request->trainer_cnic;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->fname   = $request->fname;
        $student->guardian_contact = $request->fcontact;
        $student->religious = $request->religious;
        $student->address   = $request->address;
        $student->city      = $request->city;
        $student->state     = $request->state;
        $student->country     = $request->country;
        $student->degree    = $request->degree;
        $student->institute = $request->institute;
        $student->year      = $request->year;
        $student->save();

        $general = general::where('id',1)->first();
        /*
        $data = array('femail' => 'email' );
        $user['to'] = array($request->email,$general->email1);
        Mail::send('emails.stuemail',$data,function($messages) use ($user,$request){
            $messages->to($user['to']);
            $messages->subject('Thank You For Subscribe - Skillinsiderz');
        });
       */ 
        $enrollment = new enrollment;
        $enrollment->course_id  =  $request->course;
        $enrollment->badge_id   =  $request->badge;
        $enrollment->student_id =  $student->id;
        $enrollment->stuid      =  $request->stuid;
        $enrollment->save();
         
        return redirect(route('fee.detail',$enrollment->id))->with('message','Thank You For Add New Student, Please Fees Format');
    } 
    public function active($id){
        $enrollment = enrollment::find($id);
        $enrollment->status = "active";
        $enrollment->save();    
        $fee = fee::where('enrollment_id',$id)->first();
        $fee->status = "active";
        $fee->save();
        $feeid = $fee->id;
        $balance = balance::find(1);
        $b = $balance->pending + $fee->pending;
        $balance->pending = $b;
        $balance->save();
        $installments = instalment::where('fee_id',$feeid)->where('status','!=','paid')->get();
        foreach($installments as $installment){
            $inst = instalment::find($installment->id);
            $inst->status = "unpaid";
            $inst->save();
        }
        return redirect()->back()->with('message','Enrollment Is Activated Succesfully');
           
    }
    public function freeze($id){
        $enrollment = enrollment::find($id);
        $enrollment->status = "freeze";
        $enrollment->save(); 
        $fee = fee::where('enrollment_id',$id)->first();
        $fee->status = "freeze";
        $fee->save();
        $feeid = $fee->id;
        $balance = balance::find(1);
        $b = $balance->pending - $fee->pending;
        $balance->pending = $b;
        $balance->save();
        $installments = instalment::where('fee_id',$feeid)->where('status','!=','paid')->get();
        foreach($installments as $installment){
            $inst = instalment::find($installment->id);
            $inst->status = "freeze";
            $inst->save();
        }
       return redirect()->back()->with('message','Enrollment Is Freezed Succesfully');
           
    }
    public function cancel($id){
        $enrollment = enrollment::find($id);
        $enrollment->status = "cancelled";
        $enrollment->save();    
        $fee = fee::where('enrollment_id',$id)->first();
        $fee->status = "cancelled";
        $fee->save();
        $feeid = $fee->id;
        $balance = balance::find(1);
        $b = $balance->pending - $fee->pending;
        $balance->pending = $b;
        $balance->save();
        $installments = instalment::where('fee_id',$feeid)->where('status','!=','paid')->get();
        foreach($installments as $installment){
            $inst = instalment::find($installment->id);
            $inst->status = "cancelled";
            $inst->save();
        }
        return redirect()->back()->with('message','Enrollment Is Cancelled Succesfully');
    }
}
