<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\category;
use App\Models\workshop;
use App\Models\subscriber;
use stdClass;
use App\Models\general;
use Mail;
use DB;


class pagesController extends Controller
{
    //
        //
        public function about(){
            $meta = general::find(1);
           return view('about', compact('meta'));
       }
       // terms
       public function terms(){
   
   
           return view('terms');
       }
       // privacy
       public function privacy(){
   
   
           return view('privacy');
       }
       // caertificate
       public function certificate(){
   
   
           return view('certificate');
       }
       // workshops
       public function workshop(){
        $meta = general::find(1);
        return view('workshops', compact('meta'));
       }
       // subscriber
       public function subscriber(Request $request){
           $validated = $request->validate([
               'email'=>'required|email' 
           ]);
           $subscriber = new subscriber;
           $subscriber->email = $request->email;
           $subscriber->save();  
           $data = array('femail' => 'email' );
           $user['to'] = array($request->email, "maroofkhalid2035@gmail.com");
           Mail::send('email.email',$data,function($messages) use ($user,$request){
               $messages->to($user['to']);
               $messages->subject('Thank You For Subscribe - Skillinsiderz');
           });
           return redirect()->back();
       }
       
       // Events
       public function events(){
           $events = workshop::orderBy('id','DESC')->get();
           $meta = general::find(1);
           return view('events',compact('events','meta'));
       }
       // Single Event
       public function singleevent($id){
           $meta = general::find(1);
           $sevent = workshop::where('id',$id)->first();
           return view('singleevent')->with(compact('sevent','meta'));
       }
       // FAQ's
       public function faq(){
           $meta = general::find(1);
           return view('faq',compact('meta'));
       }    
       // softwares
       public function software(){
           
           $softwares = blog::where('type',1)->get();
           $meta = general::find(1);
           return view('softwares')->with(compact('softwares','meta'));
       }
       public function singlesoftware($slug){
           
           $software = blog::where('slug',$slug)->first();
           if (!empty($software->tags) && !empty($software->meta)) {
               $meta = new stdClass();
               $meta->tags = $software->tags;
               $meta->description = $software->meta;
               $meta->title = $software->title;
               
           } else {
               $meta = general::find(1);
           }
           return view('singlesoftware',compact('software','meta'));
       }  
           // blog
       public function blog(){
           $posts = blog::orderby('id','desc')->get();
           $meta = general::find(1);
           return view('blog', compact('posts','meta'));
       }
       public function post($slug=''){
        $post = blog::where('slug',$slug)->first();
        $posts = blog::orderby('id','desc')->limit('5')->get();
         if (!empty($post->tags) && !empty($post->meta)) {
               $meta = new stdClass();
               $meta->tags = $post->tags;
               $meta->description = $post->meta;
               $meta->title = $post->title;
               
           } else {
               $meta = general::find(1);
           }
           $categories = category::all();
        return view('post',compact('post','posts','meta','categories'));
       }
}
