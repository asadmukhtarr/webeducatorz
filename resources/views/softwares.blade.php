@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
        <div class="row">
			@foreach($softwares as $software)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ $software->link }}" class="d-block">
                            <img class="card-img-top lazy" src="https://management.webeducatorz.com/storage/app/public/{{ $software->thumbnail }}" data-src="https://management.webeducatorz.com/storage/app/public/{{ $event->thumbnail }}" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">{{ ucfirst($software->category->category) }}</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ $software->link }}">{{ ucfirst($software->title) }}</a></h5>
                        <a class="btn btn-primary" href="{{ $software->link }}">Download Now</a>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
			@endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->
@endsection