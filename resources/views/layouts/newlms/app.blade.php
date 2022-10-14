<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> @yield('title') | Learn Online Earn Online</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/lms/global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/lms/assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('public/lms/global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('public/lms/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script src="{{ asset('public/lms/assets/js/app.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_pages/dashboard.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/lines.js') }}"></script>	
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/areas.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/donuts.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/bars.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/progress.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/pies.js') }}"></script>
	<script src="{{ asset('public/lms/global_assets/js/demo_charts/pages/dashboard/light/bullets.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-transmission"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="{{ asset('img/logo.png') }}" class="d-none d-sm-block" width="180px" height="90px" alt="">
				<img src="{{ asset('img/logo.png') }}" class="d-sm-none" width="180px" height="80px" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
			<span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-lg-none ml-3">Messages</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-body"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/demo/users/face18.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/demo/users/face24.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/demo/users/face17.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/demo/users/face19.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/demo/users/face16.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-secondary"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-body mr-auto">All users</a>
							<a href="#" class="text-body"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">

			<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
				<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
				@if(!empty(Auth::user()->thumbnail))
					<img src="https://webeducatorz.com/storage/app/{{ Auth::user()->thumbnail }}" class="rounded-pill mr-lg-2" height="34" alt="">
				@else
				<img src="{{ asset('img/demo.jpg') }}" class="rounded-pill mr-lg-2" height="34" alt="">
				@endif
					<span class="d-none d-lg-inline-block">{{ ucfirst(Auth::user()->name) }}</span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<a href="{{ route('profile') }}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
					<a href="{{ route('accounts') }}" class="dropdown-item"><i class="icon-coins"></i> Accounts</a>
					<div class="dropdown-divider"></div>
					<a href="{{ route('profile') }}" class="dropdown-item"><i class="icon-cog5"></i>settings</a>
					<a href="{{ route('logout') }}"  class="dropdown-item" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();" class="nav-link">
					<i class="icon-switch2"></i>
					{{ 'Logout' }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-section sidebar-user my-1">
					<div class="sidebar-section-body">
						<div class="media">
							<a href="{{ route('profile') }}" class="mr-3">
							@if(!empty(Auth::user()->thumbnail))
								<img class="rounded-full" src="https://webeducatorz.com/storage/app/public/{{ Auth::user()->thumbnail }}" class="rounded-circle" alt="">
							@else
								<img alt="image" src="{{ asset('public/img/demo.jpg') }}" class="rounded-circle" alt="" > 
							@endif
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">{{ ucfirst(Auth::user()->name) }}</div>
								<div class="font-size-sm line-height-sm opacity-50">
									{{ Auth::user()->email }}
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
									<i class="icon-transmission"></i>
								</button>

								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
									<i class="icon-cross2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


			@include('layouts.newlms.sidebar')

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">
				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
						<div class="d-flex">
							<div class="breadcrumb">
								<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Webeducatorz</a>
								@php
									$brd = explode('/',Request::url());
								@endphp
								<span class="breadcrumb-item active">{{ ucfirst($brd[4]) }}</span>
							</div>

							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->
                	@yield('content')
				</div>
				<!-- /content area -->
            	<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
						2022. <a href="#">Copyright</a> &copy; <a href="https://webeducatorz.com/" target="_blank">Webeducatorz.com</a>
						</span>

						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
							<li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
							<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer -->
			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>