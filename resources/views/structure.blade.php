@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<section class="gray mt-5">
	<div class="container-fluid">
        <div class="row course-row">
            <div class="col-lg-12" style="padding-left: 70px; padding-right: 70px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                            <tr class="table-bg fee-table" style="color:white; background-color:#FF0302;">
                                <th>Course Code </th>
                                <th>Course Name</th>
                                <th>Admission Fee</th>
                                <th>Actual Fee</th>
                                <th>Discount Fee</th>
                                <th>Discount</th>
                                <th>Duration</th>
                            </tr>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->code }}</td>
                                <td>{{ $course->title }}</td>
                                <td>Rs{{ $course->adm_fee }}</td>
                                <td>Rs {{ $course->regular_fee }}</td>
                                <td><font color="red"><b>{{ $course->discount }}%</b></font></td>
                                <td>Rs {{ $course->fee }}</td>
                                <td>{{ $course->duration }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection