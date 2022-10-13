@extends('layouts.teacher.app')
@section('title','Assignments')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('message'))
            <div class="alert alert-success border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">Successfully!</span> {{ Session::get('message') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
               <b> <i class="icon-pencil"></i> Post Assignment </b>
            </div>
            <div class="card-body">
                <form action="{{ route('save.assignments') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Assignment Title</label>
                        <input type="text" class="form-control" placeholder="Assignment Title" name="title" />
                        @error('title')
                            <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Last Date</label>
                        <input type="date" class="form-control" placeholder="Last Date" name="last_date" />
                        @error('last_date')
                            <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Select Batch</label>
                        <select class="form-control" name="batch">
                            <option>Select Batch</option>
                            @foreach($batches as $batch)
                                <option value="{{ $batch->id }}">{{ $batch->course->title }} - {{ $batch->code }}</option>
                            @endforeach
                        </select>
                        @error('batch')
                            <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Total Marks</label>
                        <input type="number" class="form-control" placeholder="Total Marks" name="total" />
                        @error('total')
                            <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"> <i class="icon-arrow-right15"></i> Save </button>
                    </div>  
                </form>                
            </div>
        </div>
    </div>
    <div class="col-lg-8">
    <div class="card">
            <div class="card-header">
               <b> <i class="icon-pencil"></i> Post Assignment </b>
            </div>
            <div class="card-body">
                @foreach($assignments as $assignment)
                    <table class="table table-bordered mt-1">
                        <tr class="danger">
                            <th colspan="3">{{ $assignment->title }} - {{ $assignment->badge->course->code }}</th>
                            <th>Total Marks</th>
                            <td>{{ $assignment->total }}</td>
                        </tr>
                        <tr>
                            <th>Batch</th>
                            <th>Last</th>
                            <th>Status</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>{{ $assignment->badge->code }}</td>
                            <td>{{ $assignment->last_date }}</td>
                            <td>
                                @if($assignment->status == 0)
                                    <span class="badge badge-success">Active</span>
                                @elseif($assignment->status == 1)
                                    <span class="badge badge-danger">Closed</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('single.assignment',$assignment->id) }}">
                                    <span class="badge badge-info">
                                        <i class="icon-arrow-right15"></i>
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('delete.assignments',$assignment->id) }}">
                                    <span class="badge badge-danger">
                                        <i class="icon-trash"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </table>
                @endforeach               
            </div>
        </div>
    </div>
</div>
@endsection