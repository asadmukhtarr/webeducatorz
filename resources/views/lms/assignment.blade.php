@extends('layouts.newlms.app')
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
            @error('answer')
                <div class="alert alert-danger border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <span class="font-weight-semibold">Warning!</span> {{ $message }}
                </div>
            @enderror
            <div class="card">
                <div class="card-header">
                     <h5 class="card-title"> <i class="icon-books"></i> Assignments</h5> 
                </div>
                <div class="card-body">
                    @foreach($enrollments as $enrollment)
                        @foreach($enrollment->badge->assignments as $assignment)
                            <form action="{{ route('submit.assignments', $assignment->id ) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered mt-1">
                                    <tr style="background-color:#3F98C0; color:white;">
                                        <th colspan="6"> <i class="icon-pencil"></i> {{ ucfirst($assignment->title) }}</th>
                                    </tr>
                                    <tr>
                                        <th>Batch</th>
                                        <th>Last Date</th>
                                        <th>Total Marks</th>
                                        <th>Your Marks</th>
                                        <th>Upload Assignment</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $assignment->badge->code }}</td>
                                        <td>{{ $assignment->last_date }}</td>
                                        <td>{{ $assignment->total }}</td>
                                        @php
                                            $task = App\Models\task::where('assignment_id',$assignment->id)->where('user_id',Auth::id())->first();
                                        @endphp
                                        <td><font color="red"><b>{{ $task->gain }}</b></font></td>
                                        <td>
                                            @if($assignment->status == 0)
                                                @if($task->status == 0)
                                                    <input type="file" name="answer">
                                                @elseif($task->status == 1)
                                                    <span class="badge badge-success">Submitted</span>
                                                @endif
                                            @else 
                                                <span class="badge badge-danger">Closed</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($assignment->status == 0)
                                                @if($task->status == 0)
                                                    <button type="submit" class="btn btn-info btn-sm"> Upload </button>
                                                @elseif($task->status == 1)
                                                    <span class="badge badge-success">Submitted</span>
                                                @endif
                                            @else
                                                <span class="badge badge-danger">Closed</span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
