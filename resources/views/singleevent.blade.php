@extends('layouts.app')
@section('Title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<div class="ed_detail_head">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="authi_125">
                    <div class="authi_125_thumb">
                        <img src="http://localhost:8000/{{ $sevent->thumbnail }}" class="img-fluid rounded" alt="" />
                    </div>
                    <a href="#" class="klio_45"><div class="lklo_45"><i class="fas fa-play"></i></div><h6>Preview</h6></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="dlkio_452">
                    <div class="ed_detail_wrap">
                        <div class="crs_cates cl_1"><span>{{$sevent->category->category}}</span></div>
                        <div class="ed_header_caption">
                            <h2 class="ed_title">{{$sevent->title}}</h2>
                            <ul>
                                <li><i class="ti-time"></i>{{ date("g:i a", strtotime( $sevent->start)) }} - {{ date("g:i a", strtotime( $sevent->end)) }}</li>
                                <li><i class="ti-calendar"></i>{{$sevent->date}}</li>
                                <a target="_blank" href="{{$sevent->link}}"><li><i class="ti-link"></i>Join Here Zoom</li></a>
                            </ul>
                        </div>
                        <div class="ed_header_short">
                            <p>{!!  $sevent->description !!}</p>
                        </div>
                    </div>
                    <div class="dlkio_last">
                        <div class="ed_view_link">
                            <a target="_blank" href="{{$sevent->reg_link}}" class="btn theme-bg enroll-btn">Enroll Yourself<i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection