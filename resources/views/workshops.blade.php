@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
        <div class="row">
			@foreach($events as $event)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_{{ $course->id }}">
                    <div class="card-image">
                        <a href="course-details.html" class="d-block">
                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">{{ ucfirst($course->category->category) }}</div>
                            <div class="course-badge blue">{{ $course->discount }}% Discount</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                        <h5 class="card-title"><a href="{{ route('course',$course->slug) }}">{{ ucfirst($course->title) }}</a></h5>
                        <p class="card-text"><a href="teacher-detail.html">{{ $course->duration }} - {{ $course->noc }} Lectures</a></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-price text-black font-weight-bold">Rs {{ $course->fee }} <span class="before-price font-weight-medium">{{ $course->regular_fee }}</span></p>
                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
			<div class="tooltip_templates">
				<div id="tooltip_content_{{$course->id}}">
					<div class="card card-item">
						<div class="card-body">
							<p class="card-text pb-2"><a href="#">{{ ucfirst($course->category->category) }}</a></p>
							<h5 class="card-title pb-1"><a href="{{ route('course',$course->slug) }}">{{ ucfirst($course->title) }}</a></h5>
							<ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
								<li>{{ $course->noc }} Lectures</li>
								<li>{{ $course->schedual }} Classes in a week</li>
							</ul>
							<p class="card-text pt-1 fs-14 lh-22">
								{{ ucfirst($course->meta) }}
							</p>
							<div class="d-flex justify-content-between align-items-center mt-5">
								<a href="{{ route('apply.online') }}" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-arrow-right mr-1 fs-18"></i>Enroll Now</a>
								<div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
							</div>
						</div>
					</div><!-- end card -->
				</div>
			</div>
			@endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->
@endsection