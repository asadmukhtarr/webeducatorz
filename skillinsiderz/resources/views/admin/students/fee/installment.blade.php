@extends('layouts.portal')
@section('title','Create Student')
@section('content')
<div>
    <section class="section">
        <div class="section-body">
            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('message') }}
                    </div>
                </div>
            @endif
            @error('method') 
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    <span class="error">{{ $message }}</span>
                    </div>
                </div>
            @enderror 
            @error('last_date') 
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    <span class="error">{{ $message }}</span>
                    </div>
                </div>
            @enderror 
            @error('update') 
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    <span class="error">{{ $message }}</span>
                    </div>
                </div>
            @enderror 
            <div class="container">
                <table class="table table-bordered">
                        <thead>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>Last Date</th>
                            <th>Update</th>
                            <th>Action</th>
                        </thead>
                        @foreach($fee->instalments as $installment)
                            @if($installment->status == "paid")
                            <tr>
                                        <td>{{ ucfirst($installment->type)  }}</td>
                                        <td>Rs {{ ucfirst($installment->amount)  }}</td>
                                        <td>{{ ucfirst($installment->status)  }}</td>
                                        <td>
                                            {{ ucfirst($installment->method)  }}   
                                        </td>
                                        <td>
                                            {{ $installment->last_day }}
                                        </td>
                                        <td>
                                            {{ ucfirst($installment->status)  }}
                                        </td>
                                        <td>
                                            <a href="{{ route('invoice.download',$installment->id) }}">
                                                <button type="button" class="btn btn-danger">Invoice</button>
                                            </a>    
                                        </td>
                                    </tr>
                            @else 
                                <form action="{{ route('inst.pay', $installment->id) }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>{{ ucfirst($installment->type)  }}</td>
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
                            @endif        
                        @endforeach
                </table>
                @if($fee->pending == 0)
                    <label for="">
                        Complete fee is paid please click here to download complete <a href="{{ route('invoicef.download', $fee->id) }}">recipe</a> 
                    </label>
                @endif    
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <td>Rs {{ $fee->regular_fee + $fee->admission_fee }} </td>
                                </tr>
                                <tr>
                                    <th>Paid</th>
                                    <td>Rs {{ $fee->paid }} </td>
                                </tr>
                                <tr>
                                    <th>Pending</th>
                                    <td>Rs {{ $fee->pending }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</div>      
<script>

</script>      
@endsection