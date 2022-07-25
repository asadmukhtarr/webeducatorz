<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\blog;
class blogController extends Controller
{
    //
    public function create(){
        $categories = category::all();
        return view('admin.blog.create', compact('categories'));
    }
    // allposts
    public function posts(){
        $blogs = blog::all();
        return view('admin.blog.posts',compact('blogs'));
    }

    public function delPost($id){
        $del = blog::find($id);
        $del->delete();
        return redirect()->back()->with('message','Blog Deleted Successfully');
    }

    public function edit($id){
        $categories = category::all();
        $blog = blog::find($id);
        return view('admin.blog.edit')->with(compact('categories','blog'));
    }

    public function updatePost($id,Request $request){

        $title = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $title);
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->thumbnail = "storage/".$imageName;
        $blog->meta = $request->meta;
        $blog->description = $request->description;
        $blog->category_id   = $request->category;
        $blog->type        = $request->type;
        $blog->tags        = $request->tags;
        $blog->slug        = $slug;
        $blog->save();
        return redirect(route('all.posts'))->with('message','News Updated Succesfully');
    }

    // save
    public function save(Request $request){
        return $request;
        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'meta' => 'required',
            'description' => 'required',
            'category' => 'required',
            'type' => 'required',
            'tags' => 'required',
        ]);
        if($request->type == 1){
            $validated = $request->validate([
                'link' => 'required',
            ]); 
        }
        $title = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $title);
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $blog = new blog;
        $blog->title = $request->title;
        $blog->thumbnail = "storage/".$imageName;
        $blog->meta = $request->meta;
        $blog->description = $request->description;
        $blog->category_id   = $request->category;
        $blog->type        = $request->type;
        $blog->tags        = $request->tags;
        $blog->slug        = $slug;
        if($request->type == 1){
            $blog->link     = $request->link;
        }
        $blog->save();
        return redirect(route('all.posts'))->with('message','News Updated Succesfully');
    }
}
