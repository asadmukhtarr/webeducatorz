@extends('layouts.portal')
@section('title','Fee Collection')
@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
        <h4>Current Month Installments</h4>
        <div class="card-header-action">
            @include('admin.accounts.menu')
        </div>
        </div>
        <div class="card-body">
        <a href="{{ route('accounts.monthpdf') }}">    
            <button type="button" class="btn btn-primary btn-sm">Download</button>
        </a>
        <label for="" class="float-right"><b>Amount: <font color="red">{{ $total_ammount }} PKR</font></b></label>
        <br /> <br />
        <table class="table table-bordered" id="tableExport">
                        <thead>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>Last Date</th>
                            <th>Update</th>
                            <th>Action</th>
                        </thead>
                        @foreach($instalments as $installment)
                        <form action="{{ route('inst.pay', $installment->id) }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>{{ ucfirst($installment->student->name)  }}</td>
                                        <td>Rs {{ ucfirst($installment->amount)  }}</td>
                                        <td>{{ ucfirst($installment->status)  }}</td>
                                        <td>
                                            @if(!empty($installment->method))
                                                {{ ucfirst($installment->method)  }}
                                            @else   
                                                <input type="text" class="form-control" name="method" />    
                                            @endif    
                                        </td>
                                        <td>
                                        @if(!empty($installment->last_day) && $installment->status == "paid" )
                                                {{ $installment->last_day }}
                                        @elseif(!empty($installment->last_day))
                                            <input type="date" class="form-control" id="myDate{{$installment->id}}" data-toggle="tooltip" data-placement="top"
                                                title="Last Date of Fee Submission is {{ $installment->last_day }}" value="" name="last_date" /> 
                                            @else   
                                                <input type="date" class="form-control" name="last_date" />   
                                            @endif    
                                            
                                        </td>
                                        <td>
                                            @if($installment->status == "paid")
                                                {{ ucfirst($installment->status)  }}
                                            @else   
                                                <input type="radio" value="paid" name="update" /> Paid 
                                                <input type="radio" value="update" name="update" /> Update Date   
                                            @endif
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger">Paid</button>
                                        </td>
                                    </tr>
                                </form>        
                        @endforeach
                </table>
        </div>
    </div>
</div>
@endsection
