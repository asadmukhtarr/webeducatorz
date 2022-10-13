@extends('layouts.teacher.app')
@section('title','Your Courses')
@section('content')
<!-- Default ordering -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title"> <i class="icon-books"></i> Your Batches</h5>
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
            @foreach($batches as $course)
            <tr>
                <td>{{ $course->course->title }}</td>
                <td>{{ $course->code }}</td>
                <td>{{ $course->course->schedual }}</td>
                <td>{{ $course->days }}</td>
                <td>{{ $course->start }}</td>
                <td>
                    {{ $course->slot->start }} - {{ $course->slot->end }}
                </td>
                <td class="text-center">
                    <a href="{{ route('course.details',$course->id) }}">
                        <span class="badge badge-info"> <i class="icon-arrow-right15"></i> Details </span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /default ordering -->
@endsection