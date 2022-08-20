@extends('layouts.app')
@section('title', 'Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
    <section class="gray mt-3">
        <div class="container-fluid">
            <div class="row course-row">
                <div class="col-lg-12" style="padding-left: 70px; padding-right: 70px;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <tr class="table-bg fee-table" style="color:white; background-color:#FF0302;">
                                <th>Upcoming Workshops</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Time</th>
								<th>Register Link</th>
								<th>Meeting Link</th>
								<th>Status</th>
                            </tr>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ ucfirst($event->title) }}</td>
									<td>
                                        {{ ucfirst($event->type) }}
                                    </td>
									<td>
                                        {{ ucfirst($event->category->category) }}
                                    </td>
                                    <td>
                                        {{ $event->date }}
                                    </td>
                                    <td>
                                        {{ date("g:i a", strtotime($event->start)) }} -   {{ date("g:i a", strtotime($event->end)) }}
                                    </td>
									<td>
										<a class="btn btn-sm btn-outline-primary" href="{{$event->reg_link}}">Register</a>
									</td>
									<td>
										<a class="btn btn-sm btn-outline-primary" href="{{$event->meeting}}">Meeting Link</a>
										
									</td>
                                    <td>
                                        <span class="label label-primary">{{ucfirst($event->status)}}</span>
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
