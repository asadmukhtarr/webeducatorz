
@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
<section class="gray">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="breadcrumbs-wrap">
				<h1 class="breadcrumb-title">Find Instructor</h1>
				<nav class="transparent">
					<ol class="breadcrumb p-0 ">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active theme-cl" aria-current="page">Find Instructor</li>
					</ol>
				</nav>
			</div>
		</div>
	   	@foreach($trainers as $trainer)
	   	 <div class="col-lg-3">
	        <div class="crs_trt_grid mt-5 mb-3">
	            <div class="crs_trt_thumb circle">
	                <a href="{{ route('singletrainer',$trainer->id) }}" class="crs_trt_thum_link"><img src="https://management.infinitetechnologyinstitute.com/{{ $trainer->picture }}" class="img-fluid circle" alt=""></a>
	            </div>
	            <div class="crs_trt_caption">
	                <div class="instructor_tag dark"><span>{{ ucfirst($trainer->category->category) }}</span></div>
	                <div class="instructor_title"><h4><a href="{{ route('singletrainer',$trainer->id) }}">{{ Str::limit( $trainer->name,15 ) }}</a></h4></div>
	            </div>
	            <div class="crs_trt_footer">
	                <div class="crs_trt_ent" data-toggle="tooltip" data-placement="bottom" title="Member Since {{date('d-m-Y', strtotime($trainer->created_at))}}"><i class="fa fa-clock"></i>{{date('d-m-Y', strtotime($trainer->created_at))}}
					</div>
	            </div>
	        </div>
	    </div>
	   	@endforeach
	</div>
</div>
</section>
<script type="text/javascript">
	$(function () {
	  	$('[data-toggle="tooltip"]').tooltip();
	});
</script>
@include('action')  
@endsection             