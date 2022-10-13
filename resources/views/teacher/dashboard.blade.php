@extends('layouts.teacher.app')
@section('title','Dashbaord')
@section('content')
<div class="row">
		<div class="col-xl-12">
			<!-- Quick stats boxes -->
			<div class="row">
				<div class="col-lg-3">
					<!-- Members online -->
					<div class="card bg-teal text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{$batches}}</h3>
							</div>
							
							<div>
								Your Current Batches
								<div class="font-size-sm opacity-75">Your All Batches</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="members-online"></div>
						</div>
					</div>
					<!-- /members online -->
				</div>
				<div class="col-lg-3">
					<!-- Current server load -->
					<div class="card bg-pink text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $students }}</h3>
							</div>
							
							<div>
								Students
								<div class="font-size-sm opacity-75">Your Students</div>
							</div>
						</div>

						<div id="server-load"></div>
					</div>
					<!-- /current server load -->

				</div>
				<div class="col-lg-3">

					<!-- Today's revenue -->
					<div class="card bg-primary text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $students }}</h3>
							</div>
							<div>
								Completed Courses
								<div class="font-size-sm opacity-75">Your Courses</div>
							</div>
						</div>

						<div id="today-revenue"></div>
					</div>
					<!-- /today's revenue -->

				</div>
			</div>
			<!-- /quick stats boxes -->
		</div>
	</div>
@endsection