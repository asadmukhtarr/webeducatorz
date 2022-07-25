@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
			<!-- ============================ Blog Detail Start ================================== -->
			<section class="gray">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<!-- Blog Detail -->
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="article_detail_wrapss single_article_wrap format-standard">
								<div class="article_body_wrap">
								
									<div class="article_featured_image">
										<img class="img-fluid" src="https://management.infinitetechnologyinstitute.com/public/{{ $post->thumbnail }}" alt="">
									</div>
									
									<div class="article_top_info">
										<ul class="article_middle_info">
											<li><a href="#"><span class="icons"><i class="ti-user"></i></span>Skillinsiderz</a></li>
										</ul>
									</div>
									<h2 class="post-title">{{ ucfirst($post->title) }}</h2>
									{!! $post->description !!}
								</div>
							</div>						
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							@include('sidebar.sidebar')
						</div>
					</div>
					<!-- /row -->					
				</div>
			</section>
			<!-- ============================ Blog Detail End ================================== -->
@include('action')	
@endsection