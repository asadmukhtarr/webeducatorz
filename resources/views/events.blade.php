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
                                <th>Date</th>
                                <th>Timing</th>
                                <th>Category</th>
                                <th>Enroll Now</th>
                            </tr>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ ucfirst($event->title) }}</td>
                                    <td>
                                        {{ $event->date }}
                                    </td>
                                    <td>
                                        {{ $event->time }}
                                    </td>
                                    <td>
                                        {{ ucfirst($event->category->category) }}
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
