@extends('layouts.teacher.app')
@section('title','Assignments')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @error('gain')
            <div class="alert alert-danger border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">Error!</span> {{ $message }}
            </div>
        @enderror
        @if(Session::has('message'))
            <div class="alert alert-success border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">Successfully!</span> {{ Session::get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                 <i class="icon-books"></i> {{ ucfirst($assignment->badge->course->title) }}
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr style="background-color:red;">
                        <th colspan="5">{{ $assignment->title }}</th>
                    </tr>
                    <tr>
                        <th>Batch</th>
                        <th>Last Date</th>
                        <th>Status</th>
                        <th>Total Marks</th>
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
                        <td>{{ $assignment->total }}</td>
                        <td>
                                @if($assignment->status == 0)
                                    <a href="{{ route('close.assignments',$assignment->id) }}">
                                        <button class="btn btn-danger">Close</button>
                                    </a>
                                @elseif($assignment->status == 1)
                                    <span class="badge badge-danger">Closed</span>
                                @endif
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered table-hovered">
                    <tr>
                        <th colspan="6">
                            Students
                        </th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Assignment</th>
                        <th>Marks</th>
                        <th>Action</th>
                    </tr>
                    @foreach($assignment->task as $task)
                    <form action="{{ route('task_status.assignments', $task) }}" method="post">
                        @csrf
                        <tr>
                            <td>{{ ucfirst($task->user->name) }}</td>
                            <td>{{ $task->user->email }}</td>
                            <td>
                                @if($task->status == 0)
                                    <span class="badge badge-success">Pending</span>
                                @elseif($task->status == 1)
                                    <span class="badge badge-danger">Submitted</span>
                                @endif
                            </td>
                            <td>
                                @if($task->status == 0)
                                    <span class="badge badge-info">Pending</span>
                                @elseif($task->status == 1)
                                    <a class="btn btn-danger" href="https://webeducatorz.com/storage/app/assignment/{{ $task->answer }}">
                                        Download
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if(empty($task->gain))
                                    <input type="text" class="form-control" name="gain" />
                                @else
                                    {{ $task->gain }}
                                @endif  
                            </td>
                            <td>
                                @if(empty($task->gain))
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Update  
                                    </button>
                                @else
                                    <span class="badge badge-success">Submitted</span>
                                @endif
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection