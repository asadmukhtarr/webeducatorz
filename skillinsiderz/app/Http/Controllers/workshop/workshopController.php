<?php

namespace App\Http\Controllers\workshop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\workshop;
use App\Models\general;
use Mail;

class workshopController extends Controller
{
    //
    public function events(){
        $events = workshop::orderby('id','desc')->get();
        return view('admin.workshop.events',compact('events'));
    }
    // create event
    public function create(){
        $categories = category::all();
        return view('admin.workshop.create',compact('categories'));
    }
    // save
    public function save(Request $request){
        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'reg_link' => 'required',
            'type' => 'required',
            'meeting' => 'required',
            'eventby' => 'required',
            'amount' => 'required',
            'meta' => 'required',
            'tags' => 'required'
        ]);
        
        $title = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $title);
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $workshop = new workshop;
        $workshop->thumbnail   = "storage/".$imageName;
        $workshop->title       = $request->title;
        $workshop->slug        = $slug;
        $workshop->description = $request->description;
        $workshop->category_id = $request->category;
        $workshop->date        = $request->date;
        $workshop->start       = $request->start;
        $workshop->end         = $request->end;
        $workshop->reg_link    = $request->reg_link;
        $workshop->type        = $request->type;
        $workshop->meeting     = $request->meeting;
        $workshop->meta        = $request->meta;
        $workshop->tags        = $request->tags;
        $workshop->eventby     = $request->eventby;
        $workshop->amount      = $request->amount;
        $workshop->save();

        $general = general::where('id',1)->first();
        /*
        $data = array('date' => $request->date , 'stime' => $request->start , 'etime' => $request->end);
        $user['to'] = array($general->email1);
        Mail::send('emails.eventmail',$data,function($message) use ($user,$request){
            $message->to($user['to']);
            $message->subject('hello world');
        });
        */
        return redirect(route('all.events'))->with('message','Event is launched Succesfully');
    }
    // delete 
    public function delete($id){
        $event = workshop::find($id);
        $event->delete();
        return redirect()->back()->with('message','Event Deleted Succesfully');
    }
}
