<?php

namespace App\Http\Controllers\academics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\visit;
use App\Exports\visitsExport;
use Maatwebsite\Excel\Facades\Excel;
class visitsController extends Controller
{
    //
    public function index(){
        $courses = course::orderBy('id','DESC')->get();
        $visits  = visit::all();
        return view('admin.academics.visits')->with(compact('visits','courses'));
    }
    public function excel(){
        return Excel::download(new visitsExport, 'visits.xlsx');
    }
    public function save(Request $request){
        $validated = $request->validate([
            'name'  => 'required',
            'phone' => 'required',
            'reference' => 'required',
            'course' => 'required',
            'details' => 'required'
        ]);
        $visit = new visit;
        $visit->name = $request->name;
        $visit->phone = $request->phone;
        $visit->email = $request->email;
        $visit->reference = $request->reference;
        $visit->course_id = $request->course;
        $visit->details = $request->details;
        $visit->save();
        return redirect(route('academics.visit'))->with('message','Visitor Added Succesfully');
    }
    public function delete($id){
        $visit = visit::find($id);
        $visit->delete();
        return redirect()->back()->with('message','Delete Visitor Details Succesfully');
    }
    public function add(){
        $courses = course::all();
        return view('admin.academics.addvisit', compact('courses'));
    }
}
