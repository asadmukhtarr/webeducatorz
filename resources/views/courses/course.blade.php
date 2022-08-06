@extends('layouts.app')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg">
    <div class="container">
        <div class="col-lg-8 mr-auto">
            <div class="breadcrumb-content">
                <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">{{ ucfirst($course->category->category) }}</a></li>
                </ul>
                <div class="section-heading">
                    <h2 class="section__title">{{ ucfirst($course->title) }}</h2>
                    <p class="section__desc pt-2 lh-30">{{ ucfirst($course->meta) }}</p>
                </div><!-- end section-heading -->
				<!--
                <div class="d-flex flex-wrap align-items-center pt-3">
                    <h6 class="ribbon ribbon-lg mr-2 bg-3 text-white">Bestseller</h6>
                    <div class="rating-wrap d-flex flex-wrap align-items-center">
                        <div class="review-stars">
                            <span class="rating-number">4.4</span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star-o"></span>
                        </div>
                        <span class="rating-total pl-1">(20,230 ratings)</span>
                        <span class="student-total pl-2">540,815 students</span>
                    </div>
                </div>
				-->
				<!-- end d-flex -->
                <!-- <p class="pt-2 pb-1">Schedule <label class="text-color hover-underline">{{ $course->schedual }} Classes in a week</label></p> -->
                <div class="d-flex flex-wrap align-items-center">
                    <p class="pr-3 d-flex align-items-center">
                        <svg class="svg-icon-color-gray mr-1" width="16px" viewBox="0 0 24 24"><path d="M23 12l-2.44-2.78.34-3.68-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12zm-10 5h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        {{ $course->schedual }} Classes in a week
                    </p>
                    <p class="pr-3 d-flex align-items-center">
                        <svg class="svg-icon-color-gray mr-1" width="16px" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 00-1.38-3.56A8.03 8.03 0 0118.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 015.08 16zm2.95-8H5.08a7.987 7.987 0 014.33-3.56A15.65 15.65 0 008.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 01-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
                        {{ $course->duration }} 
                    </p>
                </div><!-- end d-flex -->
                <div class="bread-btn-box pt-3">
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mr-2 mb-2">
                        <i class="la la-heart-o mr-1"></i>
                        <span class="swapping-btn" data-text-swap="Wishlisted" data-text-original="Wishlist">Wishlist</span>
                    </button>
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mr-2 mb-2" data-toggle="modal" data-target="#shareModal">
                        <i class="la la-share mr-1"></i>Share
                    </button>
                    <a href="https://management.webeducatorz.com/storage/app/public/{{ $course->outline }}" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mb-2">
                        <i class="la la-flag mr-1"></i>Download Outline
                    </a>
                </div>
            </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE DETAILS AREA
======================================-->
<section class="course-details-area pb-20px">
    <div class="container">
        <div class="row">
           <div class="col-lg-8 pb-5">
               <div class="course-details-content-wrap pt-20px">
                   <div class="course-overview-card">
                       <h3 class="fs-24 font-weight-semi-bold pb-3">Description</h3>
                       {!! $course->description !!}
                       <div class="table-responsive mt-1">
                            <table class="table table-striped table-bordered table-hover">
                                    <tr style="color:white; background-color:#FF0302;">
                                        <th colspan="4"> <i class="la la-clock"></i> Upcoming Batches </th>
                                    </tr>
                                    <tr class="table-bg fee-table">
                                        <th>Starting Date</th>
                                        <th>Timing</th>
                                        <th>Days</th>
                                        <th>Duration</th>
                                    </tr>
                                    @foreach($course->badges->where('status',0) as $badge)
                                    <tr>
                                        <td>
                                            {{ substr($badge->start,'8') }} {{ date("F", strtotime($badge->start));  }}
                                            {{ date("Y", strtotime($badge->start));  }}
                                        </td>
                                        <td>
                                            {{ date("g:i a", strtotime($badge->slot->start)) }} -   {{ date("g:i a", strtotime($badge->slot->end)) }}
                                        </td>
                                        <td>{{ $badge->days }}</td>
                                        <td>
                                            {{ $badge->course->duration }}
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                   </div><!-- end course-overview-card -->
                   <div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">About the instructors</h3>
                       @php
                         $teachers = App\Models\trainer::where('category_id',$course->category_id)->get();
                       @endphp 
                       @foreach($teachers as $teacher)
                       <div class="instructor-wrap">
                            <div class="media media-card">
                                <div class="instructor-img">
                                    <a href="teacher-detail.html" class="media-img d-block">
                                        <img class="lazy" src="{{ asset('images/img-loading.png') }}" data-src="images/small-avatar-1.jpg" alt="Avatar image">
                                    </a>
                                </div><!-- end instructor-img -->
                                <div class="media-body">
                                    <h5><a href="teacher-detail.html">{{ ucfirst($teacher->name) }}</a></h5>
                                    <span class="d-block lh-18 pt-2 pb-3">{{ $teacher->created_at }}</span>
                                    <p class="text-black lh-18 pb-3">{!! $teacher->description !!}</p>
                                    <p class="pb-3">asdas</p>
                                </div>
                            </div>
                        </div><!-- end instructor-wrap -->
                       @endforeach 
                   </div><!-- end course-overview-card -->
               </div><!-- end course-details-content-wrap -->
           </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar sidebar-negative">
                    <div class="card card-item">
                        <div class="card-body">
                            <div class="preview-course-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal">
                                    <img src="https://management.webeducatorz.com/storage/app/public/{{ $course->thumbnail }}" data-src="https://management.webeducatorz.com/storage/app/public/{{ $course->thumbnail }}" alt="course-img" class="w-100 rounded lazy">
                                </a>
                            </div><!-- end preview-course-video -->
                            <div class="preview-course-feature-content pt-40px">
                                <p class="d-flex align-items-center pb-2">
                                    <span class="fs-35 font-weight-semi-bold text-black">Rs {{ $course->fee }}</span>
                                    <span class="before-price mx-1">{{ $course->regular_fee }}</span>
                                    <span class="price-discount">{{ $course->disocunt }} % Off</span>
                                </p>
                                <div class="buy-course-btn-box">
                                    <a href="{{ route('apply.online') }}">
                                    <button type="button" class="btn theme-btn w-100 mb-2"><i class="la la-arrow-right fs-18 mr-1"></i> Enroll Now</button>
                                    </a>
                                </div>
                                <div class="preview-course-incentives">
                                    <h3 class="card-title fs-18 pb-2">This course includes</h3>
                                    <ul class="generic-list-item pb-3">
                                        <li><i class="la la-play-circle-o mr-2 text-color"></i>Online & Recording Lectures</li>
                                        <li><i class="la la-file mr-2 text-color"></i>Online</li>
                                        <li><i class="la la-file-text mr-2 text-color"></i>Complete Practical Training</li>
                                        <li><i class="la la-code mr-2 text-color"></i>Certification</li>
                                        <li><i class="la la-key mr-2 text-color"></i>Job Guarantee</li>
                                        <li><i class="la la-television mr-2 text-color"></i>Internship</li>
                                        <li><i class="la la-certificate mr-2 text-color"></i>Freelancing Training</li>
                                    </ul>
                                    <div class="section-block"></div>
                                </div><!-- end preview-course-incentives -->
                            </div><!-- end preview-course-content -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Course Features</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-flash">
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-clock mr-2 text-color"></i>Duration</span> {{ $course->duration }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-play-circle-o mr-2 text-color"></i>Lectures</span> {{ $course->noc }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-file-text-o mr-2 text-color"></i>Classes in a week</span> {{ $course->schedual }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-eye mr-2 text-color"></i>Course Code</span> {{ $course->code }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-language mr-2 text-color"></i>Language</span> English</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-money mr-2 text-color"></i>Admission Fee</span> Rs {{ $course->adm_fee }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-money mr-2 text-color"></i>Discounted Fee</span> Rs {{ $course->fee }}</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-certificate mr-2 text-color"></i>Certificate</span> Yes</li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Related Courses</h3>
                            <div class="divider"><span></span></div>
                            @foreach(App\Models\course::where('category_id',$course->category_id)->where('status','1')->get() as $course)
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="course-details.html" class="media-img">
                                    <img class="mr-3 lazy" src="https://management.webeducatorz.com/storage/app/public/{{ $course->thumbnail }}" data-src="https://management.webeducatorz.com/storage/app/public/{{ $course->thumbnail }}" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="{{ route('course',$course->slug) }}">{{ ucfirst($course->title) }}</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">{{ $course->duration }} Months</span>
                                    <p class="text-black font-weight-semi-bold lh-18 fs-15">Rs {{ $course->fee }} <span class="before-price fs-14">Rs {{ $course->regular_fee }}</span></p>
                                </div>
                            </div><!-- end media -->
                            @endforeach
                            <div class="view-all-course-btn-box">
                                <a href="{{ route('courses') }}" class="btn theme-btn w-100">View All Courses <i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end course-details-area -->
<!--======================================
        END COURSE DETAILS AREA
======================================-->

<!--======================================
        START CTA AREA
======================================-->
<section class="cta-area pt-60px pb-60px position-relative overflow-hidden">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
</section><!-- end cta-area -->
<!--======================================
        END CTA AREA
======================================-->

<div class="section-block"></div>
@endsection