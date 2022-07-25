<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use App\Models\badge;
use App\Models\category;
use App\Models\trainer;
use App\Models\general;
use App\Models\assigntrainer;
use Mail;

class teachersController extends Controller
{
    // all teachers ..
    public function index(){
        $trainers = trainer::orderby('id','desc')->get();
        return view('admin.teachers.teachers',compact('trainers'));
    }

    // ceate teacher ..
    public function create(){
        $categories  = category::orderby('id','DESC')->get();
        return view('admin.teachers.addteacher',compact('categories'));
    }
    // show us 
    public function show($id){
        $teacher = trainer::find($id);
        return view('admin.teachers.teacher', compact('teacher'));
    }
    // edit.
    public function edit($id){
        $teacher = trainer::find($id);
        $categories  = category::orderby('id','DESC')->get();
        return view('admin.teachers.edit', compact('teacher','categories'));
    }
    // store 
    public function store(Request $request){
        $validated = $request->validate([
            'image' => 'required',
            'description' => 'required',
            'mou' => 'required',
            'cnic'  => 'required',
            'cnic_i'  => 'required',
            'document' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'aphone' => 'required',
            'address' => 'required',
            'category' => 'required',
        ]);
        //return $request->file('document')->extension();
        // profile photo
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        // CV
         if ($request->hasFile('document')) {
            $document= time().'document.'.$request->file('document')->extension();
            $document = strtolower($document);
            $document = preg_replace('/\s+/', '-', $document);
            Storage::disk('public')->put($document, $document);
            //$request->document->move(public_path('public'), $document);
        }
        
        // MOU
        if ($request->hasFile('mou')) {
            $mou  = time().'mou.'.$request->file('mou')->extension();
            $mou = preg_replace('/\s+/', '-', $mou);
            //$path = $request->file('mou')->storeAs('public',$mou);
            Storage::disk('public')->put($mou, $mou);
        }
        // CNIC
        $cn  = time().'.'.$request->cnic_i->extension(); 
        $cn_img   = ImageManagerStatic::make($request->cnic_i)->encode('jpg');
        Storage::disk('public')->put($cn, $cn_img);
    
        $teacher = new trainer;
        $teacher->picture = 'storage/'.$imageName;
        $teacher->name  = $request->name;
        $teacher->email = $request->email;
        $teacher->document = 'storage/'.$document;
        $teacher->description = $request->description;
        $teacher->phone  = $request->phone;
        $teacher->phone2  = $request->aphone;
        $teacher->address = $request->address;
        $teacher->cnic    = $request->cnic;
        $teacher->cnic_i  = 'storage/'.$cn;
        $teacher->mou     = 'storage/'.$mou;
        $teacher->category_id = $request->category;
        $teacher->save();     
        
        $general = general::where('id',1)->first();
        /*
        $data = array('fname' => 'maroof subhani'); 
        $user['to'] = array($request->email,$general->email1);
        Mail::send('emails.teachermail',$data,function($message) use ($user,$request){
            $message->to($user['to']);
            $message->subject('hello world');
        });
        */
        return redirect(route('teachers'))->with('message','Trainer Added Successfully');
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'description' => 'required',
            'cnic'  => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'aphone' => 'required',
            'address' => 'required',
            'category' => 'required',
        ]);
        $i = 0; $d=0; $c=0; $m=0;
        if($request->has('image')){
            // profile photo
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
            $i = 1;
        }
        // CV
        if($request->has('document')){
           $document= time().'document.'.$request->file('document')->extension();
            $document = strtolower($document);
            $document = preg_replace('/\s+/', '-', $document);
            Storage::disk('public')->put($document, $document);
            $d  = 1;
        }
        if($request->has('mou')){    
            // MOU
             $mou  = time().'mou.'.$request->file('mou')->extension();
            $mou = preg_replace('/\s+/', '-', $mou);
            //$path = $request->file('mou')->storeAs('public',$mou);
            Storage::disk('public')->put($mou, $mou);
            $m  = 1;
        } 
        if($request->has('cnic_i')){      
            // CNIC
            $cn  = time().'.'.$request->cnic_i->extension(); 
            $cn_img   = ImageManagerStatic::make($request->cnic_i)->encode('jpg');
            Storage::disk('public')->put($cn, $cn_img);
            $c = 1;
        }    
        $teacher = trainer::find($id);
        if($i == 1){
            $teacher->picture = 'content/'.$imageName;
        }    
        $teacher->name  = $request->name;
        $teacher->email = $request->email;
        if($d == 1){
            $teacher->document = 'content/'.$document;
        }    
        $teacher->description = $request->description;
        $teacher->phone  = $request->phone;
        $teacher->phone2  = $request->aphone;
        $teacher->address = $request->address;
        $teacher->cnic    = $request->cnic;
        if($c == 1){
            $teacher->cnic_i  = 'content/'.$cn;
        }
        if($m == 1){
            $teacher->mou     = 'content/'.$mou;
        }    
        $teacher->category_id = $request->category;
        $teacher->save();       
        return redirect(route('teachers'))->with('message','Trainer Updated Successfully');
    }
    public function delete($id){
        //return $id;
        $trainerbadge = assigntrainer::where('trainer_id',$id)->get();
        $trainerc = $trainerbadge->count();
        if($trainerc > 0){
            $msg = "Trainer Has Assigned Course";
        } else {
            $trainer = trainer::find($id);
            $trainer->delete();
            $msg = "Deleted Trainer Successfully";
        }
        return redirect()->back()->with('message',$msg);
    }
    

}
