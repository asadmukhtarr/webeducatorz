<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
class categoriesController extends Controller
{
    // all categories
    public function index(){
        $categories = category::orderby('id','desc')->get();
        return view('admin.category.category', compact('categories'));
    }
    
    // create category ..
    public function save(Request $request){
        $validated = $request->validate([
            'image' => 'required',
            'description' => 'required',
            'name'  => 'required',
        ]);
        
        $imageName = time().'.'.$request->image->extension(); 
        $img   = ImageManagerStatic::make($request->image)->encode('jpg');
        Storage::disk('public')->put($imageName, $img);
        $categories  = new category;
        $categories->thumbnail = $imageName;
        $categories->category  = $request->name;
        $categories->description  = $request->description;
        $categories->save();
        return redirect()->back()->with('message','Succesfully Added Category');
    }
    public function delete($id){
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('delete','Succesfully deleted');
    }
    public function edit($id){
        $category = category::find($id);
        $categories = category::orderby('id','desc')->get();
        return view('admin.category.edit', compact('categories','category'));
    }
    // upate ..
    public function update($id, Request $request){
        $c = 0;
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
            $c = 1;
        }
        
        $category = category::find($id);
        if($c == 1){
            $category->thumbnail = $imageName;
        }
        $category->category  = $request->name;
        $category->save();
        return redirect(route('categories'))->with('message','Updated Successfully');
    }
}
