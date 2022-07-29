@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<!-- ============================ Course Detail ================================== -->
<section class="gray">
	<div class="container-fluid">
        <div class="row course-row">
            <div class="col-lg-9">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                            <tr class="table-bg fee-table" style="color:white; background-color:#036DB9;">
                                <th>Upcoming Events/Workshops</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Register Here</th>
                            </tr>
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->category->category }}</td>
                                <td>{{ $event->type }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->start }} - {{ $event->end }}</td>
                                <td>
                                    <a href="{{ $event->reg_link }}" target="_blank" role="button" class="btn theme-bg btn-rounded" >
                                        JOIN US
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</section>    
<!-- ============================ Course Detail End================================== -->
@endsection