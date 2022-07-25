<?php

namespace App\Http\Controllers\timetable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slot;
use App\Models\room;
class timeController extends Controller
{
    //
    public function slot(){
        $slots = slot::all();
        $rooms = room::all();
        return view('admin.timetable.addslots', compact('slots','rooms'));
    }
    public function createslot(Request $request){
    
        $slot = new slot;
        $slot->start = $request->s;
        $slot->end = $request->e;
        $slot->save();
        return redirect()->back()->with('message','slot Added Succesfully');

    }
    public function createroom(Request $request){
        $room = new room;
        $room->room = $request->room;
        $room->save();
        return redirect()->back()->with('message','Room Added Succesfully');
    }
    public function removeroom($id){
        $room = room::find($id);
        $room->delete();
        return redirect()->back()->with('message','Room Removed Succesfully');
    }
    public function removeslot($id){
        $slot = slot::find($id);
        $slot->delete();
        return redirect()->back()->with('message','Slot Removed Succesfully');
    }

}
