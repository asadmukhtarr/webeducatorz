@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
			<!-- ============================ article Start ================================== -->
			<section class="min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8">
							<div class="sec-heading center">
								<h2>Latest News & <span class="theme-cl">Articles</span></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<!-- Single Item -->
						@foreach($posts as $post)
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="blg_grid_box">
								<div class="blg_grid_thumb">
									<a href="{{ route('blog.post',$post->slug) }}"><img src="https://management.infinitetechnologyinstitute.com/public/{{ $post->thumbnail }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="blg_grid_caption">
									<div class="blg_tag"><span>{{ $post->category->category }}</span></div>
									<div class="blg_title"><h4><a href="{{ route('blog.post',$post->slug) }}">{{ $post->title }}</a></h4>{{ substr($post->meta,'0','80') }}</div>
									<!-- <div class="blg-desc"><p>{!! substr($post->description,'0','80') !!}</p></div> -->
								</div>
								<div class="crs_grid_foot">
									<div class="crs_flex">
										<div class="crs_fl_first">
											<div class="crs_tutor">
												<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="https://via.placeholder.com/500x500" class="img-fluid circle" alt="" /></a></div>
											</div>
										</div>
										<div class="crs_fl_last">
											<div class="foot_list_info">
												<ul>
											
													<li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">{{ $post->created_at->diffForHumans() }}</div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ article End ================================== -->
@include('action')
@endsection