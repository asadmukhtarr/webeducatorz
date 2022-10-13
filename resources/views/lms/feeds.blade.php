@extends('layouts.newlms.app')
@section('title','News Feeds')
@section('content')

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                    <div class="row">
                        @foreach ($events as $event)
    
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="{{ route('blog.post',$event->id) }}" class="d-block">
                                        <img class="card-img-top" src="https://management.webeducatorz.com/storage/app/public/{{ $event->thumbnail }}" alt="Card image cap">
                                    </a>
                                </div><!-- end card-image -->
                                <div class="card-body">

                                    <p class="card-text lh-22 pt-2"><a href="{{ route('blog.post',$event->id) }}" target="_blank">{{ $event->title }}</a></p>
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