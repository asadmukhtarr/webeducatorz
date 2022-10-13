@extends('layouts.newlms.app')
@section('title','Workshops')
@section('content')
        <!-- Featured articles -->
        <div class="mb-3 py-2">
            <h4 class="font-weight-semibold mb-0">Upcoming Workshops</h4>
            <span class="text-muted d-block">Workshops are 1 or more days short trainings in which learnerz can learn more about trainings</span>
        </div>

        <div class="row">
            @foreach ($events as $event)
                <div class="col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-img-actions">
                            <img class="card-img-top img-fluid" src="https://management.webeducatorz.com/storage/app/public/{{ $event->thumbnail }}" alt="">
                
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ ucfirst($event->title) }}</h5>
                            <p class="card-text">{{ ucfirst(substr($event->meta,0,100)) }}</p>
                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between">
                            <span class="text-muted"> <i class="icon-calendar"></i> {{ ucfirst($event->date) }}</span>
                            <span class="text-muted"> <i class="icon-cabinet"></i> {{ ucfirst($event->category->category) }}</span>
                            <span class="badge badge-danger">
                                <a href="{{ $event->reg_link }}" target="_blank"><font color="white"><b>Register Here</b></font></a>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /featured articles -->
@endsection