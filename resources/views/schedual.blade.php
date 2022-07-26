@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<section class="gray mt-3">
	<div class="container-fluid">
        <div class="row course-row">
            <div class="col-lg-12" style="padding-left: 70px; padding-right: 70px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                            <tr class="table-bg fee-table" style="color:white; background-color:#FF0302;">
                                <th>Upcoming Courses/Workshops</th>
                                <th>Starting Date</th>
                                <th>Timing</th>
                                <th>Days</th>
                                <th>Duration</th>
                                <th>Enroll Now</th>
                            </tr>
                            @foreach($badges as $badge)
                            <tr>
                                <td>{{ $badge->course->title }}</td>
                                <td>
                                    {{ substr($badge->start,'8') }} {{ date("F", strtotime($badge->start));  }}
                                    {{ date("Y", strtotime($badge->start));  }}
                                </td>
                                <td>
                                    {{ date("g:i a", strtotime($badge->slot->start)) }} -   {{ date("g:i a", strtotime($badge->slot->end)) }}
                                </td>
                                <td>{{ $badge->days }}</td>
                                <td>
                                    {{ $badge->course->duration }}
                                </td>
                                <td>
                                    <button class="btn theme-bg btn-rounded">Details</button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection