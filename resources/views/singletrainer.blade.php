@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<div class="ed_detail_head">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="authi_125">
                    <div class="authi_125_thumb">
                        <img src="http://localhost:8000/{{ $finalArray['trainers']['picture'] }}" class="img-fluid rounded" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="dlkio_452">
                    <div class="ed_detail_wrap">
                        <div class="crs_cates cl_1"><span>{{ $finalArray['trainers']['category']['category'] }}</span></div>
                        <div class="ed_header_caption">
                            <h2 class="ed_title">{{ $finalArray['trainers']['name'] }}</h2>
                            <ul>
                                <li><i class="ti-calendar"></i> Member Since {{date('d-m-Y', strtotime($finalArray['trainers']['created_at']))}}</li>
                            </ul>
                        </div>
                        <div class="ed_header_short">
                            <p class="text-justify">{!! $finalArray['trainers']['description'] !!}</p>
                        </div>
                    </div>
                    <div class="dlkio_last">
                        <div class="ed_view_link">
                            <a href="#" class="btn theme-bg enroll-btn">Our Courses<i class="ti-angle-right"></i></a>
                            <a href="https://www.facebook.com/plugins/share_button.php?href=https://chillyfacts.com/create-facebook-share-button-for-website-webpages/&layout=button&size=small&mobile_iframe=true&width=60&height=20&appId" class="btn theme-border enroll-btn">Share<i class="fas fa-share"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>			
<!-- ============================ Course Detail ================================== -->
<section class="gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2>Recent Listed <span class="theme-cl">Cources</span></h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="slide_items">
                    @foreach($finalArray['courses'] as $course)
                        <!-- Single Item -->
                    <div class="lios_item">
                        <div class="crs_grid shadow_none brd">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="http://localhost:8000/{{ $course->thumbnail }}" style="height:250px; width:100%;" class="img-fluid rounded" alt="" />
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_1"><span>{{ $course->category->category }}</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">{{ number_format($course->regular_fee, 2, ',', '.') }}</span></h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">{{ $course->title }}</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>{{ $course->duration }}</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>{{ $course->noc }} Lectures</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>Explore Featured <span class="theme-cl">workshops</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($finalArray['workshops'] as $workshop)
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="crs_grid_list">
                    <div class="crs_grid_list_thumb">
                        <a href="course-detail.html"><img src="http://localhost:8000/{{ $workshop->thumbnail }}" class="img-fluid rounded" alt=""></a>
                    </div>
                    <div class="crs_grid_list_caption">
                        <div class="crs_lt_101">
                            <span class="est st_1">{{ $workshop->category->category }}</span>
                        </div>
                        <div class="crs_lt_102">
                            <h4 class="crs_tit">{{ $workshop->title }}</h4>
                            <span class="crs_auth"><i>By</i> Skillinsiderz</span>
                        </div>
                        <div class="crs_lt_103">
                            <div class="crs_info_detail">
                                <ul>
                                    <li><i class="fa fa-video"></i><span>Online</span></li>
                                    <li><i class="fa fa-user"></i><span>Physicall</span></li>
                                    <li><i class="fa fa-calendar"></i><span>{{ $workshop->date }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="crs_flex">
                            <div class="crs_fl_first">
                                <div class="crs_price"><h2><span class="theme-cl">Free</span></h2></div>
                            </div>
                            <div class="crs_fl_last">
                                <div class="crs_linkview"><a href="course-detail.html" class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8 mt-2">
                <div class="text-center"><a href="grid-layout-with-sidebar.html" class="btn btn-md theme-bg-light theme-cl">Explore More Wor</a></div>
            </div>
        </div>
    </div>
</section>

@include('action')	
@endsection				