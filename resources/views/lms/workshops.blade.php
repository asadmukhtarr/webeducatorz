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
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="lesson-details.html" class="d-block">
                                        <img class="card-img-top" src="images/img8.jpg" alt="Card image cap">
                                    </a>
                                </div><!-- end card-image -->
                                <div class="card-body">
                                    <h5 class="card-title"><a href="lesson-details.html">The Complete Full-Stack JavaScript Course!</a></h5>
                                    <p class="card-text lh-22 pt-2"><a href="teacher-detail.html">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                       
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->


@endsection