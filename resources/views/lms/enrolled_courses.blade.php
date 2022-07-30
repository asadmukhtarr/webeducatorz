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
                <div class="tab-pane fade" id="completed-course" role="tabpanel" aria-labelledby="completed-course-tab">
                    <div class="row">
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-image">
                                    <a href="lesson-details.html" class="d-block">
                                        <img class="card-img-top" src="images/img8.jpg" alt="Card image cap">
                                        <div class="play-button">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                        <style type="text/css">
                                                            .st0{opacity:0.6; fill:#000000; border-radius: 100px;}
                                                            .st1{fill:#FFFFFF;}
                                                        </style>
                                                <g>
                                                            <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle><path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                        </g>
                                                    </svg>
                                        </div>
                                    </a>
                                </div><!-- end card-image -->
                                <div class="card-body">
                                    <h5 class="card-title"><a href="lesson-details.html">The Complete Full-Stack JavaScript Course!</a></h5>
                                    <p class="card-text lh-22 pt-2"><a href="teacher-detail.html">Jose Portilla</a><span>, Software Engineer and Developer</span></p>
                                    <ul class="card-duration d-flex align-items-center fs-15 pt-3">
                                        <li class="mr-2">
                                            <span class="text-black">Total Courses:</span>
                                            <span>5</span>
                                        </li>
                                        <li class="mr-2">
                                            <span class="text-black">Completed Courses:</span>
                                            <span>5/5</span>
                                        </li>
                                    </ul>
                                    <div class="my-course-progress-bar-wrap d-flex align-items-center pt-3">
                                        <p class="skillbar-title">Complete:</p>
                                        <div class="skillbar-box">
                                            <div class="skillbar skillbar-skillbar-2" data-percent="100%">
                                                <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                            </div><!-- End Skill Bar -->
                                        </div>
                                        <div class="skill-bar-percent">100%</div>
                                    </div><!-- end my-course-progress-bar-wrap -->
                                    <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                        <div class="review-stars">
                                            <span class="la la-star-o"></span>
                                            <span class="la la-star-o"></span>
                                            <span class="la la-star-o"></span>
                                            <span class="la la-star-o"></span>
                                            <span class="la la-star-o"></span>
                                        </div>
                                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">Leave a rating</a>
                                    </div><!-- end rating-wrap -->
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