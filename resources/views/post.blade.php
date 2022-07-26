@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
		<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area pt-80px pb-80px pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading pb-3">
                <h2 class="section__title">6 Ways to Instantly Improve your Ui Design</h2>
            </div>
            <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog-no-sidebar.html">Blog</a></li>
                <li>6 Ways to Instantly Improve your Ui Design</li>
            </ul>
            <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                <li class="d-flex align-items-center">By<a href="#">TechyDevs</a></li>
                <li class="d-flex align-items-center">Jan 24, 2020</li>
                <li class="d-flex align-items-center"><a href="#comments" class="page-scroll">4 Comments</a></li>
                <li class="d-flex align-items-center">130 Shares</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card card-item">
					<div class="row pb-3">
						<div class="col-lg-12">
						   <div class="mt-3">
							   <img src="https://management.infinitetechnologyinstitute.com/public/{{ $post->thumbnail }}" data-src="images/img1.jpg" alt="blog-img" class="img-fluid rounded-rounded lazy">
						   </div>
						</div><!-- end col-lg-6 -->
					</div><!-- end row -->
                    <div class="card-body">
						<h3 class="fs-20 font-weight-semi-bold">{{ ucfirst($post->title) }}</h3>
                        <p class="card-text pb-3">{!! $post->description !!}</p>  
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="section-block"></div>
                <div class="comments-wrap pt-5" id="comments">
                    <div class="d-flex align-items-center justify-content-between pb-4">
                        <h3 class="fs-22 font-weight-semi-bold">Comments</h3>
                        <span class="ribbon ribbon-lg">4</span>
                    </div>
                    <div class="comment-list">
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Kavi arasan</h5>
                                <span class="d-block lh-18 pb-2">a month ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4 review-reply">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-2.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Jitesh Shaw</h5>
                                <span class="d-block lh-18 pb-2">1 months ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-3.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">Miguel Sanches</h5>
                                <span class="d-block lh-18 pb-2">2 month ago</span>
                                <p class="pb-3">This is one of the best courses I have taken in Udemy. It is very complete, and it has made continue learning about Java and SQL databases as well.</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">Was this review helpful?</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                    </div>
                    <div class="load-more-btn-box text-center pt-3 pb-5">
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30"><i class="la la-refresh mr-1"></i> Load More Comment</button>
                    </div>
                </div>
                <div class="section-block"></div>
                <div class="add-comment-wrap pt-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">Add a Comment</h3>
                    <form method="post" class="row">
                        <div class="input-box col-lg-6">
                            <label class="label-text">Name</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                                <span class="la la-user input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-6">
                            <label class="label-text">Email</label>
                            <div class="form-group">
                                <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box col-lg-12">
                            <label class="label-text">Message</label>
                            <div class="form-group">
                                <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
                            </div>
                        </div><!-- end input-box -->
                        <div class="btn-box col-lg-12">
                            <div class="custom-control custom-checkbox mb-3 fs-15">
                                <input type="checkbox" class="custom-control-input" id="saveCheckbox" required>
                                <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                    Save my name, and email in this browser for the next time I comment.
                                </label>
                            </div><!-- end custom-control -->
                            <button class="btn theme-btn" type="submit">Submit Comment</button>
                        </div><!-- end btn-box -->
                    </form>
                </div><!-- end add-comment-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Search Field</h3>
                            <div class="divider"><span></span></div>
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search courses">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Categories</h3>
                            <div class="divider"><span></span></div>
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" id="catCheckbox" required>
                                <label class="custom-control-label custom--control-label text-black" for="catCheckbox">
                                    Business<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" id="catCheckbox2" required>
                                <label class="custom-control-label custom--control-label text-black" for="catCheckbox2">
                                    UI & UX<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" id="catCheckbox3" required>
                                <label class="custom-control-label custom--control-label text-black" for="catCheckbox3">
                                    Animation<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" id="catCheckbox4" required>
                                <label class="custom-control-label custom--control-label text-black" for="catCheckbox4">
                                    Game Design<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="collapse" id="collapseMore">
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox5" required>
                                    <label class="custom-control-label custom--control-label text-black" for="catCheckbox5">
                                        Graphic Design<span class="ml-1 text-gray">(12,300)</span>
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox6" required>
                                    <label class="custom-control-label custom--control-label text-black" for="catCheckbox6">
                                        Typography<span class="ml-1 text-gray">(12,300)</span>
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox7" required>
                                    <label class="custom-control-label custom--control-label text-black" for="catCheckbox7">
                                        Web Development<span class="ml-1 text-gray">(12,300)</span>
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox8" required>
                                    <label class="custom-control-label custom--control-label text-black" for="catCheckbox8">
                                        Photography<span class="ml-1 text-gray">(12,300)</span>
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox9" required>
                                    <label class="custom-control-label custom--control-label text-black" for="catCheckbox9">
                                        Finance<span class="ml-1 text-gray">(12,300)</span>
                                    </label>
                                </div><!-- end custom-control -->
                            </div><!-- end collapse -->
                            <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                                <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-14"></i></span>
                                <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-14"></i></span>
                            </a>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Recent Posts</h3>
                            <div class="divider"><span></span></div>
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="course-details.html" class="media-img">
                                    <img class="mr-3" src="images/small-img-2.jpg" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="course-details.html">The Complete JavaScript Course 2021</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                    <p class="text-black font-weight-semi-bold lh-18 fs-15">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                </div>
                            </div><!-- end media -->
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="course-details.html" class="media-img">
                                    <img class="mr-3" src="images/small-img-3.jpg" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="course-details.html">Learning jQuery Mobile for Beginners</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                    <p class="text-black font-weight-semi-bold lh-18 fs-15">$129.99</p>
                                </div>
                            </div><!-- end media -->
                            <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="course-details.html" class="media-img">
                                    <img class="mr-3" src="images/small-img-4.jpg" alt="Related course image">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15"><a href="course-details.html">Introduction LearnPress – LMS plugin</a></h5>
                                    <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                    <p class="text-black font-weight-semi-bold lh-18 fs-15">Free</p>
                                </div>
                            </div><!-- end media -->
                            <div class="view-all-course-btn-box">
                                <a href="blog-no-sidebar.html" class="btn theme-btn w-100">View All Posts <i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Post Tags</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-boxed d-flex flex-wrap fs-15">
                                <li class="mr-2"><a href="#">Business</a></li>
                                <li class="mr-2"><a href="#">Event</a></li>
                                <li class="mr-2"><a href="#">Video</a></li>
                                <li class="mr-2"><a href="#">Audio</a></li>
                                <li class="mr-2"><a href="#">Software</a></li>
                                <li class="mr-2"><a href="#">Conference</a></li>
                                <li class="mr-2"><a href="#">Marketing</a></li>
                                <li class="mr-2"><a href="#">Freelance</a></li>
                                <li class="mr-2"><a href="#">Tips</a></li>
                                <li class="mr-2"><a href="#">Technology</a></li>
                                <li class="mr-2"><a href="#">Entrepreneur</a></li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->
@endsection