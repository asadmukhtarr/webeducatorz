<?php

namespace App\Http\Controllers\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fee;
use App\Models\instalment;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use PDF;
use App\Models\expense;
class feecollectionsController extends Controller
{
    //
    public function index(){

        $fees = fee::where('status','active')->orderby('id','desc')->get();
        $paid = fee::where('status','active')->sum('paid');
        $pending = fee::where('status','active')->sum('pending');
        return view('admin.accounts.feecollection', compact('fees','paid','pending'));
    }
    public function installments(){
        $instalments = instalment::where('status','paid')->orderby('id','desc')->get();
        $paid = fee::where('status','active')->sum('paid');
        return view('admin.accounts.installments', compact('instalments','paid'));
    }
    public function pending(){        
        $instalments = instalment::where('status','unpaid')->orderby('id','desc')->get();
        $pending = fee::where('status','active')->sum('pending');
        return view('admin.accounts.pending', compact('instalments','pending'));
    }
    public function month(){
        $instalments = instalment::whereMonth('last_day',Carbon::now()->month)->whereYear('last_day',Carbon::now()->year)->where('status','unpaid')->orderby('id','desc')->get();
        $total_ammount = instalment::whereMonth('last_day',Carbon::now()->month)->whereYear('last_day',Carbon::now()->year)->where('status','unpaid')->sum('amount');
        return view('admin.accounts.month', compact('instalments','total_ammount'));
    }
    public function monthpdf(){
        $instalments = instalment::whereMonth('last_day',Carbon::now()->month)->where('status','unpaid')->orderby('id','desc')->get();
        $total_ammount = instalment::whereMonth('last_day',Carbon::now()->month)->where('status','unpaid')->sum('amount');
        $n = instalment::whereMonth('last_day',Carbon::now()->month)->where('status','unpaid')->count();
        $data = array(
            'month' => date('M-Y') ,
            'noi' => $n,
            'fees' => $instalments ,
            'amount' => $total_ammount
        );
        $pdf = PDF::loadView('pdf.currentmonthfee', $data);
       return $pdf->download(date('M-Y').'-Installments.pdf');
    }
    public function expensesave(Request $request){
        $validated = $request->validate([
            'start' => 'required',
            'end' => 'required',
        ]);
        $expenses = expense::whereBetween('date', [$request->start, $request->end])
        ->orderby('date','asc')->get();
        $sum = expense::whereBetween('date', [$request->start, $request->end])
        ->sum('amount');
        $data = array(
            'duration' => $request->start.'-'.$request->end,
            'expenses' => $expenses,
            'amount' => $sum
        );
        $pdf = PDF::loadView('pdf.expense', $data);
        return $pdf->download($request->start.'-'.$request->end.'-expenses.pdf');
    }
    public function receivingsave(Request $request){
        $validated = $request->validate([
            'start' => 'required',
            'end' => 'required',
        ]);
        $instalments = instalment::where('status','paid')->whereBetween('last_day', [$request->start, $request->end])
        ->orderby('last_day','asc')->get();
        $sum = instalment::where('status','paid')->whereBetween('last_day', [$request->start, $request->end])->sum('amount');
        $noi = instalment::where('status','paid')->whereBetween('last_day', [$request->start, $request->end])->count();
        $data = array(
            'duration' => $request->start.'-'.$request->end,
            'noi' => $noi,
            'fees' => $instalments,
            'amount' => $sum
        );
        $pdf = PDF::loadView('pdf.recevings', $data);
        // return $pdf->stream();
        return $pdf->download($request->start.'-'.$request->end.'-Receivings.pdf');
    }

    public function resave(Request $request){
        
        $start_date = $request->start."-"."01";
        $start_time = strtotime($start_date);

        $end_time = strtotime("+1 month", $start_time);

        for($i=$start_time; $i<$end_time; $i+=86400)
        {
            $list[] = date('Y-m-d', $i);
        }
        
        $n = explode('-',$request->start);
        $instalments = instalment::where('status','paid')->whereMonth('last_day', $n[1])->whereYear('last_day', $n[0])
        ->orderby('last_day','asc')->get();
        $isum = instalment::where('status','paid')->whereMonth('last_day', $n[1])->whereYear('last_day', $n[0])
        ->sum('amount');
        $expense = expense::whereMonth('date', $n[1])->whereYear('date', $n[0])
        ->orderby('date','asc')->get();
        $esum =expense::whereMonth('date', $n[1])->whereYear('date', $n[0])->sum('amount');
        $data = array(
            'installments' => $instalments,
            'expense' => $expense,
            'month' => $request->start,
            'isum' => $isum,
            'esum' => $esum,
            'dates' => $list
        );
        $pdf = PDF::loadView('pdf.alldetails',$data);
        return $pdf->stream();
        //return $pdf->download($request->start.'-All.pdf');
        
    }
}
