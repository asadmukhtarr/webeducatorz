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
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">   
            <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="active-course-tab" data-toggle="tab" href="#active-course" role="tab" aria-controls="active-course" aria-selected="true">
                        Active Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="completed-course-tab" data-toggle="tab" href="#completed-course" role="tab" aria-controls="completed-course" aria-selected="false">
                        Completed Courses
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="active-course" role="tabpanel" aria-labelledby="active-course-tab">
                    <div class="row">
                        @foreach($courses as $course)
                            @php
                                $c = App\Models\course::find($course->course_id);
                            @endphp
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="lesson-details.html" class="d-block">
                                            <img class="card-img-top" src="https://management.webeducatorz.com/storage/app/public/{{ $c->thumbnail }}" alt="Card image cap" />
                                        </a>
                                    </div><!-- end card-image -->
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="lesson-details.html">{{ ucfirst($c->title) }}</a></h5>
                                        <p class="card-text lh-22 pt-2"><a href="#">{{  $c->category->category }}</a></p> <br />
                                        <button class="btn btn-danger"> <i class="la la-arrow-right"></i> Lectures</button>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="completed-course" role="tabpanel" aria-labelledby="completed-course-tab">
                    <div class="row">
                    <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="lesson-details.html" class="d-block">
                                        <img class="card-img-top" src="images/img9.jpg" alt="Card image cap" />
                                    </a>
                                </div><!-- end card-image -->
                                <div class="card-body">
                                    <h5 class="card-title"><a href="lesson-details.html">Complete Microsoft SQL Server 2021 for Everyone</a></h5>
                                    <p class="card-text lh-22 pt-2"><a href="teacher-detail.html">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->


@endsection