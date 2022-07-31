@extends('layouts.dash')
@section('title','Skillinsiderz')
@section('content')

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('layouts.sidbar')
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard
        </div>
        <div class="container-fluid">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                    <div class="row">
                        @foreach ($events as $event)
    
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="{{ route('singleevent',$event->id) }}" class="d-block">
                                        <img class="card-img-top" src="https://management.webeducatorz.com/storage/app/public/{{ $event->thumbnail }}" alt="Card image cap">
                                    </a>
                                </div><!-- end card-image -->
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('singleevent',$event->id) }}"></a></h5>
                                    <p class="card-text lh-22 pt-2"><a href="{{ route('singleevent',$event->id) }}"> Date: {{ $event->date }}</a></p>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                       
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->


@endsection