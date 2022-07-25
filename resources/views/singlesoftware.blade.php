@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<!-- ============================ Page Title Start================================== -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <div class="breadcrumbs-wrap">
                    <h1 class="breadcrumb-title"><span class="text-success">Let' Download</span> {{ $software->title }}</h1>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Software Detail</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->
			
<!-- ============================ Blog Detail Start ================================== -->
<section class="gray">
    <div class="container">
        <!-- row Start -->
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">	
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    <div class="article_body_wrap">
                        <div class="article_featured_image">
                            <img class="img-fluid" src="http://localhost:8000/{{ $software->thumbnail }}" alt="">
                        </div>
                        <div class="article_top_info">
                            <ul class="article_middle_info">
                                <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by Skillinsiderz</a></li>
                            </ul>
                        </div>
                        <h2 class="post-title">{{ $software->title }}</h2>
                        <a href="{{ $software->link }}" target="_blank">
                            <button class="btn btn-primary btn-sm mt-3 shadow">Download Now</button>
                        </a>
                        <p class="text-justify">{!! $software->description !!}</p>
                    </div>
                </div>							
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                @include('sidebar.sidebar')
            </div>
        </div>
</section>
<!-- ============================ Blog Detail End ================================== -->
			
@include('action')	
@endsection