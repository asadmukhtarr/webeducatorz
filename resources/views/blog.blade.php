@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
		<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Blog Page</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START BLOG AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
        <div class="row">
			@foreach($posts as $post)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="course-details.html" class="d-block">
                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="https://management.infinitetechnologyinstitute.com/public/{{ $post->thumbnail }}" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">{{ $post->category->category }}</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('blog.post',$post->slug) }}">{{ ucfirst($post->title) }}</a></h5>
                        <p class="card-text"><a href="{{ route('blog.post',$post->slug) }}">{!! substr($post->description,'0','80') !!}</a></p>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
			@endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END BLOG AREA
======================================-->

@endsection