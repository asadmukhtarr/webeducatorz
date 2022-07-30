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
                <div class="logo-box logo--box">
                    <div class="theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
                        <button class="theme-picker-btn light-mode-btn" title="Light mode">
                            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </div>
                </div><!-- end logo-box -->
                <div class="course-dashboard-header-title pl-4">
                    <a href="#" class="text-white fs-15">Java Programming Masterclass for Software Developers</a>
                </div><!-- end course-dashboard-header-title -->
                <div class="menu-wrapper ml-auto">
                    <div class="nav-right-button d-flex align-items-center">
                        <a href="{{route('dashboard')}}" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2" data-toggle="modal" data-target="#ratingModal"> Back to Home</a>
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
                        <video controls crossorigin playsinline id="player">
                            <!-- Video files -->
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4"/>

                            <!-- Caption files -->
                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>

                            <!-- Fallback for browsers that don't support the <video> element -->
                            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                        </video>
                    </div>
                    <div class="lecture-viewer-text-wrap">
                        <div class="lecture-viewer-text-content custom-scrollbar-styled">
                            <div class="lecture-viewer-text-body">
                                <h2 class="fs-24 font-weight-semi-bold pb-4">Download your Footage for your Quick Start</h2>
                                <div class="lecture-viewer-content-detail">
                                    <ul class="generic-list-item pb-4">
                                        <li>Hi</li>
                                        <li>Welcome to Motion Graphics in After Effects. </li>
                                        <li>In the next lectures you will start creating your first animation and animate imported footage.</li>
                                        <li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes,</li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </li>
                                        <li>Occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </li>
                                        <li>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,</li>
                                        <li>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. </li>
                                        <li><strong class="font-weight-semi-bold">Download your footage Now, Click on the Link Below.</strong></li>
                                    </ul>
                                    <div class="btn-box">
                                        <h3 class="fs-18 font-weight-semi-bold pb-3">Resources for this lecture</h3>
                                        <a href="#" class="btn theme-btn theme-btn-transparent"><i class="la la-file-zip-o mr-1"></i>Quick-start.zip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end lecture-viewer-container -->
                <div class="cta-area py-4 bg-gray">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="cta-content-wrap">
                                    <h3 class="fs-18 font-weight-semi-bold">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build in-demand career skills.</h3>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="client-logo-wrap text-right">
                                    <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img.png" alt="brand image"></a>
                                    <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img2.png" alt="brand image"></a>
                                    <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img3.png" alt="brand image"></a>
                                </div><!-- end client-logo-wrap -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </div><!-- end cta-area -->
                <div class="footer-area pt-50px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <a href="index.html">
                                        <img src="images/logo.png" alt="footer logo" class="footer__logo">
                                    </a>
                                    <ul class="generic-list-item pt-4">
                                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                                        <li>Melbourne, Australia, 105 South Park Avenue</li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="fs-20 font-weight-semi-bold pb-3">Company</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Become a Teacher</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="fs-20 font-weight-semi-bold pb-3">Courses</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">Hacking</a></li>
                                        <li><a href="#">PHP Learning</a></li>
                                        <li><a href="#">Spoken English</a></li>
                                        <li><a href="#">Self-Driving Car</a></li>
                                        <li><a href="#">Garbage Collectors</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="fs-20 font-weight-semi-bold pb-3">Download App</h3>
                                    <div class="mobile-app">
                                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                                        <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                                    </div>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                    <div class="section-block"></div>
                    <div class="copyright-content py-4">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                        <div class="select-container select-container-sm">
                                            <select class="select-container-select">
                                                <option value="1">English</option>
                                                <option value="2">Deutsch</option>
                                                <option value="3">Español</option>
                                                <option value="4">Français</option>
                                                <option value="5">Bahasa Indonesia</option>
                                                <option value="6">Bangla</option>
                                                <option value="7">日本語</option>
                                                <option value="8">한국어</option>
                                                <option value="9">Nederlands</option>
                                                <option value="10">Polski</option>
                                                <option value="11">Português</option>
                                                <option value="12">Română</option>
                                                <option value="13">Русский</option>
                                                <option value="14">ภาษาไทย</option>
                                                <option value="15">Türkçe</option>
                                                <option value="16">中文(简体)</option>
                                                <option value="17">中文(繁體)</option>
                                                <option value="17">Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                    </div><!-- end copyright-content -->
                </div><!-- end footer-area -->
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
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-header -->
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCourseExample">
                                    <div class="card-body p-0">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link active">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox2" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox2"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox3" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox3"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox4" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox4"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 2: Jump Start Into Motion Graphics</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-header -->
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCourseExample">
                                    <div class="card-body p-0">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox5" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox5"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">5. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox6" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox6"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">6. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox7" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox7"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">7. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox8" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox8"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">8. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 3: Graphics from within After Effects</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-heder -->
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCourseExample">
                                    <div class="card-body p-0">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox9" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox9"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">9. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox10" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox10"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">10. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox11" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox11"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">11. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox12" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox12"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">12. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 4: Bonus Lecture</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-heder -->
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCourseExample">
                                    <div class="card-body p-0">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox13" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox13"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">13. Bonus Courses - Learn more for less</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox14" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox14"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">14. Conclusion</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
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
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="ratingModalTitle">
                        How would you rate this course?
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body text-center py-5">
                <div class="leave-rating mt-5">
                    <input type="radio" name='rate' id="star5"/>
                    <label for="star5" class="fs-45"></label>
                    <input type="radio" name='rate' id="star4"/>
                    <label for="star4" class="fs-45"></label>
                    <input type="radio" name='rate' id="star3"/>
                    <label for="star3" class="fs-45"></label>
                    <input type="radio" name='rate' id="star2"/>
                    <label for="star2" class="fs-45"></label>
                    <input type="radio" name='rate' id="star1"/>
                    <label for="star1" class="fs-45"></label>
                    <div class="rating-result-text fs-20 pb-4"></div>
                </div><!-- end leave-rating -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Share this course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="copy-to-clipboard">
                    <span class="success-message">Copied!</span>
                    <div class="input-group">
                        <input type="text" class="form-control form--control copy-input pl-3" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                        <div class="input-group-append">
                            <button class="btn theme-btn theme-btn-sm copy-btn shadow-none"><i class="la la-copy mr-1"></i> Copy</button>
                        </div>
                    </div>
                </div><!-- end copy-to-clipboard -->
            </div><!-- end modal-body -->
            <div class="modal-footer justify-content-center border-top-gray">
                <ul class="social-icons social-icons-styled">
                    <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                    <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                </ul>
            </div><!-- end modal-footer -->
        </div><!-- end modal-content-->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="reportModalTitle">Report Abuse</h5>
                    <p class="pt-1 fs-14 lh-24">Flagged content is reviewed by Aduca staff to determine whether it violates Terms of Service or Community Guidelines. If you have a question or technical issue, please contact our
                        <a href="contact.html" class="text-color hover-underline">Support team here</a>.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form method="post">
                    <div class="input-box">
                        <label class="label-text">Select Report Type</label>
                        <div class="form-group">
                            <div class="select-container w-auto">
                                <select class="select-container-select">
                                    <option value>-- Select One --</option>
                                    <option value="1">Inappropriate Course Content</option>
                                    <option value="2">Inappropriate Behavior</option>
                                    <option value="3">Aduca Policy Violation</option>
                                    <option value="4">Spammy Content</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Write Message</label>
                        <div class="form-group">
                            <textarea class="form-control form--control pl-3" name="message" placeholder="Provide additional details here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="btn-box text-right pt-2">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="la la-arrow-right icon ml-1"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="insertLinkModal" tabindex="-1" role="dialog" aria-labelledby="insertLinkModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="insertLinkModalTitle">Insert Link</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form action="#">
                    <div class="input-box">
                        <label class="label-text">URL</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Url">
                            <i class="la la-link input-icon"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Text</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Text">
                            <i class="la la-pencil input-icon"></i>
                        </div>
                    </div>
                    <div class="btn-box text-right pt-2">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Insert <i class="la la-arrow-right icon ml-1"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="uploadPhotoModalTitle">Upload an Image</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="file-upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input" multiple>
                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Drop files here or click to upload</span>
                </div><!-- file-upload-wrap -->
                <div class="btn-box text-right pt-2">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="la la-arrow-right icon ml-1"></i></button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

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