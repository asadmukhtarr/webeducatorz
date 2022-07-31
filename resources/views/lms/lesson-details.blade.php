<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/lesson-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 08:02:31 GMT -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="TechyDevs">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="{{ $meta->description }}">
	<meta name="tags" content="{{ $meta->tags }}">
	<title>{{ $meta->title }}</title>
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" sizes="16x16" href="{{asset('images/favicon.png')}}">

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-te-1.4.0.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<section class="header-menu-area">
    <div class="header-menu-content bg-dark">
        <div class="container-fluid">
            <div class="main-menu-content d-flex align-items-center">
                <div class="course-dashboard-header-title pl-4">
                    <a href="#" class="text-white fs-15">{{$course->title}}</a>
                </div><!-- end course-dashboard-header-title -->
                <div class="menu-wrapper ml-auto">
                    <div class="nav-right-button d-flex align-items-center">
                        <a href="{{route('dashboard')}}" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2"> Back to Home</a>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</section><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START COURSE-DASHBOARD
======================================-->
<section class="course-dashboard">
    <div class="course-dashboard-wrap">
        <div class="course-dashboard-container d-flex">
            <div class="course-dashboard-column">
                <div class="lecture-viewer-container">
                    <div class="lecture-video-item">
                        <!-- Video files -->
                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/iYPMBoB_u5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div><!-- end lecture-viewer-container -->
            </div><!-- end course-dashboard-column -->
            <div class="course-dashboard-sidebar-column">
                <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course content</button>
                <div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
                    <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                        <h3 class="fs-18 font-weight-semi-bold">Course content</h3>
                        <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                    </div><!-- end course-dashboard-side-heading -->
                    <div class="course-dashboard-side-content">
                        <div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">
                            <div class="card">
                                @foreach ($lectures as $lecture)
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button">
                                        <span class="fs-15">{{$lecture->title}}</span>
                                    </button>
                                </div><!-- end card-header -->
                                @endforeach
                            </div><!-- end card -->
                        </div><!-- end accordion-->
                    </div><!-- end course-dashboard-side-content -->
                </div><!-- end course-dashboard-sidebar-wrap -->
            </div><!-- end course-dashboard-sidebar-column -->
        </div><!-- end course-dashboard-container -->
    </div><!-- end course-dashboard-wrap -->
</section><!-- end course-dashboard -->
<!--======================================
        END COURSE-DASHBOARD
======================================-->

<!-- start scroll top -->
{{-- <div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div> --}}
<!-- end scroll top -->


<!-- template js files -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/waypoint.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/plyr.js')}}"></script>
<script src="{{asset('js/datedropper.min.js')}}"></script>
<script src="{{asset('js/emojionearea.min.js')}}"></script>
<script src="{{asset('js/jquery-te-1.4.0.min.js')}}"></script>
<script src="{{asset('js/jquery.MultiFile.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    var player = new Plyr('#player');
</script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/lesson-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 08:02:34 GMT -->
</html>