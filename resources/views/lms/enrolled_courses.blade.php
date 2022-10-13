@extends('layouts.newlms.app')
@section('title','Your Courses')
@section('content')
<!-- Default ordering -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title"> <i class="icon-books"></i> Assignments</h5>
    </div>
    <table class="table datatable-sorting">
        <thead>
            <tr>
                <th>Course</th>
                <th>Batch</th>
                <th>Classes (Week)</th>
                <th>Days</th>
                <th>Starting Date</th>
                <th>Slot</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            @php 
                $b = App\Models\badge::find($course->badge_id);
            @endphp
            <tr>
                <td>{{ $course->course->title }}</td>
                <td>{{ App\Models\badge::find($course->badge_id)->code }}</td>
                <td>{{ $course->course->schedual }}</td>
                <td>{{ App\Models\badge::find($course->badge_id)->days }}</td>
                <td>{{ App\Models\badge::find($course->badge_id)->start }}</td>
                <td>
                    {{ App\Models\badge::find($course->badge_id)->slot->start }} - {{ App\Models\badge::find($course->badge_id)->slot->end }}
                </td>
                <td class="text-center">
                    @if($b->status == 0)
                        <span class="badge badge-info"> <i class="icon-arrow-right15"></i> Coming Soon </span>
                    @else 
                        <a href="{{route('lesson-details',$b->id)}}">
                            <span class="badge badge-danger"> <i class="icon-arrow-right15"></i> Lectures </span>
                        </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /default ordering -->
@endsection