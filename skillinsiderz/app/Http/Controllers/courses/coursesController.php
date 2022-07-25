<?php

namespace App\Http\Controllers\courses;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\course;
use App\Models\badge;
use App\Models\enrollment;
class coursesController extends Controller
{
    // all courses
    public function index(){
        $courses = course::orderby('id','desc')->get();
        return view('admin.courses.courses', compact('courses'));
    }
    // create course 
    public function create(){
        $categories = category::orderby('id','desc')->get();
        return view('admin.courses.addcourse', compact('categories'));
    }
    // public function save 
    public function store(Request $request){

        $validated = $request->validate([
            'image' => 'required',
            'description' => 'required',
            'outline' => 'required',
            'name'  => 'required',
            'code'  => 'required',
            'duration' => 'required',
            'noc' => 'required',
            'ciaw' => 'required',
            'regularfee' => 'required',
            'discount' => 'required',
            'disfee' => 'required',
            'category' => 'required',
            'meta' => 'required',
            'tags' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $name = strtolower($request->name);
        $slug = preg_replace('/\s+/', '-', $name);
        //$path = $request->file('outline')->storeAs('public',$outline);
         if($request->hasFile('outline')) {
            $outline = time().'.'.$request->file('outline')->extension();
           // return $outline;
            $outline = strtolower($outline);
            $outline = preg_replace('/\s+/', '-', $outline);
            //$path = $request->file('mou')->storeAs('public',$mou);
            $request->file('outline')->storeAs('public',$outline);
            //Storage::disk('public')->put($outline,$request->outline );
        }
        // end outline
   
        // add new courses ...
        $course = new course;
        $course->title = $request->name;
        $course->slug  = $slug;
        $course->description  = $request->description;
        $course->code = $request->code;
        $course->thumbnail = "storage/".$imageName;
        $course->outline = $outline;
        $course->duration  = $request->duration;
        $course->noc       = $request->noc;
        $course->schedual  = $request->ciaw;
        $course->adm_fee   = $request->adm_fee;
        $course->regular_fee = $request->regularfee;
        $course->discount   = $request->discount;
        $course->fee        = $request->disfee;
        $course->meta   = $request->meta;
        $course->tags        = $request->tags;
        $course->category_id   = $request->category;
        $course->video      = $this->YoutubeID($request->link);
        $course->save();
        return redirect(route('course'))->with('message','Course Added Successfully');
    }
    function YoutubeID($url){
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }
    
    public function edit($slug = ''){
        $course = course::where('slug',$slug)->first();
        $categories = category::orderby('id','desc')->get();
        return view('admin.courses.edit', compact('course', 'categories'));
    }
    public function update($id, Request $request){
        $validated = $request->validate([
            'description' => 'required',
            'name'  => 'required',
            'code'  => 'required',
            'duration' => 'required',
            'noc' => 'required',
            'ciaw' => 'required',
            'adm_fee' => 'required',
            'regularfee' => 'required',
            'discount' => 'required',
            'disfee' => 'required',
            'category' => 'required',
            'meta' => 'required',
            'tags' => 'required',
        ]);
        $i = 0;
        $o = 0;

        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
            $i = 1;
        }

        if($request->has('outline')){
            $outline = time().'.'.$request->file('outline')->extension();
            $outline = strtolower($outline);
            $outline = preg_replace('/\s+/', '-', $outline);
            //$path = $request->file('mou')->storeAs('public',$mou);
            $request->file('outline')->storeAs('public',$outline);
            // Storage::disk('public')->put($outline, $outline);
            $o = 1;
        }

        $name = strtolower($request->name);
        $slug = preg_replace('/\s+/', '-', $name);
        $course = course::find($id);
        $course->title = $request->name;
        $course->slug  = $slug;
        $course->description  = $request->description;
        $course->code = $request->code;
        if($i == 1) {
            $course->thumbnail = "storage/".$imageName;
        }
        
        if($o == 1){
            $course->outline = $outline;
        }
        
        $course->duration  = $request->duration;
        $course->noc       = $request->noc;
        $course->adm_fee   = $request->adm_fee;
        $course->schedual  = $request->ciaw;
        $course->regular_fee = $request->regularfee;
        $course->discount   = $request->discount;
        $course->fee        = $request->disfee;
        $course->category_id   = $request->category;
        $course->video      = $request->link;
        $course->meta   = $request->meta;
        $course->tags        = $request->tags;
        $course->status     = $request->status;
        $course->save();
        return redirect(route('training',$course->slug))->with('message','Course Update Succesfully');
    }
    // course
    public function show($slug = ''){

        $course = course::where('slug',$slug)->first();
        return view('admin.courses.course', compact('course'));
    
    }
    public function outline($id){
        return $id;
        $course = course::find($id);
        $file = $course->outline;
        //$path = storage_path($file);
        $headers = array(
            'Content-Type: application/pdf',
        );
       /// return Response::download($file, $course->slug.'.pdf', $headers);
    }
    public function delete($id){
        $course = course::find($id);
        $badges = badge::where('course_id',$id)->get();
        foreach($badges as $badge){
            $students = enrollment::where('badge_id',$badge->id)->get();
            foreach($students as $student){
                $student->delete();
            }
            $badge->delete();
        }
        $course->delete();
        return redirect()->back()->with('message','Course Deleted Succesfully With All Badges And Student');
    }
}
