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
                <h2 class="section__title text-white">Blog No Sidebar</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
                <li>Blog</li>
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
<section class="blog-area section--padding">
    <div class="container">
        <div class="row">
			@foreach($posts as $post)
				<div class="col-lg-4">
					<div class="card card-item">
						<div class="card-image">
							<a href="{{ route('blog.post',$post->slug) }}" class="d-block">
								<img class="card-img-top lazy" src="https://management.infinitetechnologyinstitute.com/public/{{ $post->thumbnail }}" data-src="images/img8.jpg" alt="Card image cap">
							</a>
							<div class="course-badge-labels">
								<div class="course-badge">{{ $post->created_at->diffForHumans() }}</div>
							</div>
						</div><!-- end card-image -->
						<div class="card-body">
							<h5 class="card-title"><a href="{{ route('blog.post',$post->slug) }}">{{ $post->title }}</a></h5>
							{!! substr($post->description,'0','80') !!}
							<div class="d-flex justify-content-between align-items-center pt-3">
								<a href="{{ route('blog.post',$post->slug) }}" class="btn theme-btn theme-btn-sm theme-btn-white">Read More <i class="la la-arrow-right icon ml-1"></i></a>
							</div>
						</div><!-- end card-body -->
					</div><!-- end card -->
				</div><!-- end col-lg-4 -->
			@endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

@endsection