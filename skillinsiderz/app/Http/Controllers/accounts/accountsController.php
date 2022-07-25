<?php

namespace App\Http\Controllers\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\expensecategory;
use App\Models\balance;
use App\Models\expense;
use App\Models\instalment;
use Carbon\Carbon;
class accountsController extends Controller
{
    // overview ..
    public function index(){
        $details = balance::find(1);
        $pending = instalment::whereMonth('last_day',Carbon::now()->month)->whereYear('last_day',Carbon::now()->year)->where('status','unpaid')->sum('amount');
        $received = instalment::whereMonth('last_day',Carbon::now()->month)->whereYear('last_day',Carbon::now()->year)->where('status','paid')->sum('amount');
        $expense   = expense::whereMonth('date',Carbon::now()->month)->sum('amount');
        return view('admin.accounts.overview', compact('details','pending','received','expense'));
    }
    // expense
    public function expense(){
        $categories = expensecategory::all();
        $expenses   = expense::orderby('id','desc')->get();
        return view('admin.accounts.expense', compact('categories','expenses'));
    }
    // delete expense
    public function expensedelete($id){
        $expense = expense::find($id);
        $amount  = $expense->amount;
        $balance = balance::find(1);
        $b       =  $balance->balance;
        $b       = $b + $amount;
        $balance->balance = $b;
        $expense = $balance->expense;
        $expense = $expense - $amount;
        $balance->expense = $expense;
        $balance->save();
        $expense = expense::find($id);
        $expense->delete();
        return redirect()->back()->with('message','Expense Deleted Succesfully');
    }

    public function expensesave(Request $request){
        $validated = $request->validate([
            'details' => 'required',
            'expense' => 'required',
            'date' => 'required',
            'amount' => 'required'
        ]);
        $expense = new expense;
        $expense->title = $request->details;
        $expense->expensecategory_id = $request->expense;
        $expense->date = $request->date;
        $expense->amount = $request->amount;
        $expense->save();
        $amount = $expense->amount;
        $balance = balance::find(1);
        $b       =  $balance->balance;
        $b       = $b - $amount;
        $balance->balance = $b;
        $expense = $balance->expense;
        $expense = $expense + $amount;
        $balance->expense = $expense;
        $balance->save();
        return redirect()->back()->with('message','Expense Added Succesfully');
    }

    public function category(){
        $categories = expensecategory::all();
        return view('admin.accounts.category', compact('categories'));
    }
    public function categorysave(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $expensecategory = new expensecategory;
        $expensecategory->name = $request->name;
        $expensecategory->save();
        return redirect()->back()->with('message','Successfully Added Expense Category');
    }
    // edit ..
    public function categoryedit($id){
        $expensecategory = expensecategory::find($id);
        $categories = expensecategory::all();
        return view('admin.accounts.update',compact('expensecategory','categories'));
    }
    // update category
    public function categoryupdate($id, Request $request){
        $expensecategory = expensecategory::find($id);
        $expensecategory->name = $request->name;
        $expensecategory->save();
        return redirect(route('accounts.category'))->with('message','Category Updated Successfully');
    }

    public function categorydelete($id){
        $expensecategory = expensecategory::find($id);
        $expensecategory->delete();
        return redirect()->back()->with('message','Successfully Deleted Expense Category');   
    }
}
