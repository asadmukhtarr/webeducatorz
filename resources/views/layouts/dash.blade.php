<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/webeducatorz-demo/webeducatorz/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 08:02:39 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> | Professional Skills Hub In Pakistan</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/260a19cfaa.js" crossorigin="anonymous"></script>
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
    <header class="header-menu-area">
        <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
            <div class="container-fluid">
                <div class="main-menu-content">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="logo-box logo--box">
                                <a href="{{ route('dashboard') }}" class="logo"><img width="200px" src="{{ asset('img/logo.png') }}" alt="logo"></a>
                                <div class="user-btn-action">
                                    <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Search">
                                        <i class="la la-search"></i>
                                    </div>
                                </div>
                            </div><!-- end logo-box -->
                            <div class="menu-wrapper">
                                <form method="post" class="mr-auto ml-0">
                                    <div class="form-group mb-0">
                                        <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search for anything">
                                        <span class="la la-search search-icon"></span>
                                    </div>
                                </form>
                                <div class="nav-right-button d-flex align-items-center">
                                    <div class="user-action-wrap d-flex align-items-center">
                                        {{-- <div class="shop-cart pr-3 mr-3 border-right border-right-gray">
                                            <ul>
                                                <li>
                                                    <p class="shop-cart-btn d-flex align-items-center">
                                                        <i class="la la-shopping-cart fs-22"></i>
                                                        <span class="dot-status bg-1"></span>
                                                    </p>
                                                    <ul class="cart-dropdown-menu after-none">
                                                        <li class="media media-card">
                                                            <a href="shopping-cart.html" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="shopping-cart.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                            </div>
                                                        </li>
                                                        <li class="media media-card">
                                                            <a href="shopping-cart.html" class="media-img">
                                                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="shopping-cart.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                            </div>
                                                        </li>
                                                        <li class="media media-card">
                                                            <div class="media-body fs-16">
                                                                <p class="text-black font-weight-semi-bold lh-18">Total: <span class="cart-total">$12.99</span> <span class="before-price fs-14">$129.99</span></p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="shopping-cart.html" class="btn theme-btn w-100">Got to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- end shop-cart --> --}}
                                        {{-- <div class="shop-cart wishlist-cart pr-3 mr-3 border-right border-right-gray">
                                            <ul>
                                                <li>
                                                    <p class="shop-cart-btn">
                                                        <i class="la la-heart-o"></i>
                                                        <span class="dot-status bg-1"></span>
                                                    </p>
                                                    <ul class="cart-dropdown-menu after-none">
                                                        <li>
                                                            <div class="media media-card">
                                                                <a href="course-details.html" class="media-img">
                                                                    <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <div class="media media-card">
                                                                <a href="course-details.html" class="media-img">
                                                                    <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="my-courses.html" class="btn theme-btn w-100">Got to wishlist <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- end shop-cart --> --}}
                                        <div class="shop-cart notification-cart pr-3 mr-3 border-right border-right-gray">
                                            <ul>
                                                <li>
                                                    <p class="shop-cart-btn">
                                                        <i class="la la-bell"></i>
                                                        <span class="dot-status bg-1"></span>
                                                    </p>
                                                    <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                        <li class="menu-heading-block d-flex align-items-center justify-content-between">
                                                            <h4>Notifications</h4>
                                                            <span class="ribbon fs-14">18</span>
                                                        </li>
                                                        <li>
                                                            <div class="notification-body">
                                                                <a href="dashboard.html" class="media media-card align-items-center">
                                                                    <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                        <i class="la la-bolt"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5>Your resume updated!</h5>
                                                                        <span class="d-block lh-18 pt-1 text-gray fs-13">1 hour ago</span>
                                                                    </div>
                                                                </a>
                                                                <a href="dashboard.html" class="media media-card align-items-center">
                                                                    <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                        <i class="la la-lock"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5>You changed password</h5>
                                                                        <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                                                                    </div>
                                                                </a>
                                                                <a href="dashboard.html" class="media media-card align-items-center">
                                                                    <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                        <i class="la la-user"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5>Your account has been created successfully</h5>
                                                                        <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="menu-heading-block">
                                                            <a href="dashboard.html" class="btn theme-btn w-100">Show All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- end shop-cart -->
                                        <div class="shop-cart user-profile-cart">
                                            <ul>
                                                <li>
                                                    <div class="shop-cart-btn">
                                                        <div class="avatar-xs">
                                                            @if(!empty(Auth::user()->thumbnail))
                                                            <img class="rounded-full img-fluid" src="https://webeducatorz.com/storage/app/public/{{ Auth::user()->thumbnail }}" alt="Avatar image">
                                                            @else
                                                            <img class="rounded-full img-fluid" src="{{ asset('public/img/demo.jpg') }}" alt="Avatar image">
                                                            @endif
                                                        </div>
                                                        <span class="dot-status bg-1"></span>
                                                    </div>
                                                    <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                        <li class="menu-heading-block d-flex align-items-center">
                                                            <a href="#" class="avatar-sm flex-shrink-0 d-block">
                                                                @if(!empty(Auth::user()->thumbnail))
                                                                    <img class="rounded-full img-fluid" src="https://webeducatorz.com/storage/app/public/{{ Auth::user()->thumbnail }}" alt="Avatar image">
                                                                @else
                                                                    <img class="rounded-full img-fluid" src="{{ asset('public/img/demo.jpg') }}" alt="Avatar image">
                                                                @endif
                                                            </a>
                                                            <div class="ml-2">
                                                                <h4><a href="teacher-detail.html" class="text-black">{{Auth::user()->name}}</a></h4>
                                                                <span class="d-block fs-14 lh-20">{{Auth::user()->email}}</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                                <button class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center" title="Dark mode">
                                                                    <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                    </svg>
                                                                    Dark Mode
                                                                </button>
                                                                <button class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center" title="Light mode">
                                                                    <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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
                                                                    Light Mode
                                                                </button>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <ul class="generic-list-item">
                                                                <li>
                                                                    <a href="{{route('enrolled_courses')}}">
                                                                        <i class="la la-file-video-o mr-1"></i> My courses
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('workshops')}}">
                                                                        <i class="la la-bell mr-1"></i> Workshops
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('settings')}}">
                                                                        <i class="la la-gear mr-1"></i> Settings
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('profile')}}">
                                                                        <i class="la la-user mr-1"></i> Profile
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                                        <i class="la la-power-off mr-1"></i>
                                                                        {{ 'Logout' }}
                                                                    </a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </li>
                                                                <li>
                                                                    <div class="section-block"></div>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('home')}}" class="position-relative">
                                                                        <span class="fs-17 font-weight-semi-bold d-block m-1">Web Educatorz</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- end shop-cart -->
                                    </div>
                                </div><!-- end nav-right-button -->
                            </div><!-- end menu-wrapper -->
                        </div><!-- end col-lg-10 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                        <span class="la la-search search-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-menu-area -->
    <!--======================================
        END HEADER AREA
======================================-->


    @yield('content')



    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- Modal -->
    <div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="la la-exclamation-circle fs-60 text-warning"></span>
                    <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
                    <p>Are you sure you want to delete your account?</p>
                    <div class="btn-box pt-4">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
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
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/fancybox.js')}}"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    <script src="{{asset('js/doughnut-chart.js')}}"></script>
    <script src="{{asset('js/bar-chart.js')}}"></script>
    <script src="{{asset('js/line-chart.js')}}"></script>
    <script src="{{asset('js/datedropper.min.js')}}"></script>
    <script src="{{asset('js/emojionearea.min.js')}}"></script>
    <script src="{{asset('js/animated-skills.js')}}"></script>
    <script src="{{asset('js/jquery.MultiFile.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/webeducatorz-demo/webeducatorz/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 08:02:48 GMT -->

</html>