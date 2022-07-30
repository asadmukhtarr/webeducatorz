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
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">
                    <div class="media-img media--img media-img-md rounded-full">
                        @if(!empty(Auth::user()->thumbnail))
                            <img class="rounded-full" src="https://management.webeducatorz.com/storage/app/public/{{ Auth::user()->thumbnail }}" alt="Student thumbnail image">
                        @else
                            <img alt="image" src="{{ asset('public/img/demo.jpg') }}" class="rounded-full" > 
                        @endif
                    </div>
                    <div class="media-body">
                        <h2 class="section__title fs-30">{{ Auth::user()->name }}</h2>
                        <div class="rating-wrap d-flex align-items-center pt-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                    </div><!-- end media-body -->
                </div><!-- end media -->
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">My Profile</h3>
            </div>
            <div class="profile-detail mb-5">
                <ul class="generic-list-item generic-list-item-flash">
                    <li><span class="profile-name">Registration Date:</span><span class="profile-desc">{{ Auth::user()->created_at }}</span></li>
                    <li><span class="profile-name">Full Name:</span><span class="profile-desc">{{ Auth::user()->name }}</span></li>
                    <li><span class="profile-name">Email:</span><span class="profile-desc">{{ Auth::user()->email }}</span></li>
                    <li><span class="profile-name">Phone Number:</span><span class="profile-desc">{{ Auth::user()->phone }}</span></li>
                    <li>
                        <span class="profile-name">Bio:</span>
                        <span class="profile-desc">{{ Auth::user()->desrciption }}</span>
                    </li>
                </ul>
            </div>
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2022 webeducatorz. All Rights Reserved. by <a href="https://webeducatorz.com/">webeducatorz</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="{{route('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
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