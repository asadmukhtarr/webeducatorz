@extends('layouts.teacher.app')
@section('title',ucfirst($batch->course->title))
@section('content')
<!-- Default ordering -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title"> <i class="icon-books"></i> {{ ucfirst($batch->course->title) }} </h5>
    </div>
    <table class="table datatable-sorting">
    <thead>
            <tr>
                <th>Batch</th>
                <th>Classes (Week)</th>
                <th>Days</th>
                <th>Total Lectures</th>
                <th>Completed Lectures</th>
                <th>Starting Date</th>
                <th>Slot</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $batch->code }}</td>
                <td>{{ $batch->course->schedual }}</td>
                <td>{{ $batch->days }}</td>
                <td>{{ $batch->course->noc }}</td>
                <td>{{ $batch->lectures->count() }}</td>
                <td>{{ $batch->start }}</td>
                <td>
                    {{ $batch->slot->start }} - {{ $batch->slot->end }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-title"> <i class="icon-users"></i> Students </h5>
    </div>
    <table class="table datatable-sorting">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Country</th>
                <th>Assignments</th>
            </tr>
        </thead>
        @foreach($students as $student)
            <tr>
                <td>{{ ucfirst($student->student->name) }}</td>
                <td>{{ ucfirst($student->student->email) }}</td>
                <td>{{ ucfirst($student->student->city) }}</td>
                <td>{{ ucfirst($student->student->country) }}</td>
                <td>Coming Soon</td>
            </tr>
        @endforeach
        <tbody>
        </tbody>
    </table>
</div>
<!-- /default ordering -->
@endsection