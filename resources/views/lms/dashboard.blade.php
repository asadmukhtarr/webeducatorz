@extends('layouts.newlms.app')
@section('title','Dashboard')
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
								<h3 class="font-weight-semibold mb-0">{{$all_courses}}</h3>
							</div>
							
							<div>
								Enrolled Courses
								<div class="font-size-sm opacity-75">Your All Courses</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="members-online"></div>
						</div>
					</div>
					<!-- /members online -->
				</div>
				<div class="col-lg-3">
				@foreach ($courses as $item)
				@php
					$b = App\Models\badge::find($item->badge_id);
				@endphp    
				@endforeach
					<!-- Current server load -->
					<div class="card bg-pink text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{$b::where('status',1)->count()}}</h3>
							</div>
							
							<div>
								Active Coures
								<div class="font-size-sm opacity-75">Your Active Courses</div>
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
								<h3 class="font-weight-semibold mb-0">{{$b::where('status',2)->count()}}</h3>
							</div>
							<div>
								Completed Courses
								<div class="font-size-sm opacity-75">Your Completed Courses</div>
							</div>
						</div>

						<div id="today-revenue"></div>
					</div>
					<!-- /today's revenue -->

				</div>
				<div class="col-lg-3">

					<!-- Today's revenue -->
					<div class="card bg-primary text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ App\Models\course::count() }}</h3>
							</div>
							
							<div>
								All Courses
								<div class="font-size-sm opacity-75">All Trainings Of Webeducatorz</div>
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
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header">
					<i class="icon-piggy-bank"></i> Accounts
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>Course</th>
							<th>Batch</th>
							<th>Total</th>
							<th>Paid</th>
							<th>Pending</th>
						</tr>
						@foreach($fees as $fee)
						<tr>
							<td>{{ $fee->course->title }}</td>
							<td>{{ $fee->badge->code }}</td>
							<td>{{ $fee->total_amount }} PKR</td>
							<td>{{ $fee->paid }} PKR</td>
							<td>
								<font color="red">
									<b>
										{{ $fee->pending }} PKR
									</b>
								</font>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-7">
			<!-- Support tickets -->
			<div class="card">
				<div class="table-responsive">
					<table class="table text-nowrap">
						<tbody>
							<tr class="table-active table-border-double">
								<td colspan="3"> <i class="icon-cabinet"></i> Upcoming Workshops</td>
								<td class="text-right">
									<span class="badge badge-primary badge-pill">{{ $events->count() }}</span>
								</td>
							</tr>
							@foreach($events as $event)
							<tr>
								
								<td>
									<a href="{{ $event->reg_link }}" target="_blank" class="text-body">
										<div class="font-weight-semibold">{{ ucfirst($event->title) }}</div>
										<span class="text-muted">
										{!! substr(ucfirst($event->meta),0,70) !!}
										</span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- /support tickets -->
		</div>
		<div class="col-xl-5">
										<!-- Daily sales -->
			<div class="card">
				<div class="table-responsive">
					<table class="table text-nowrap">
						<thead>
							<tr>
								<th class="w-100"> <i class="icon-books"></i> Batch</th>
								<th> <i class="icon-calendar"></i> Starting Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($batches as $batch)
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div>
											<a href="#" class="text-body font-weight-semibold letter-icon-title">{{ ucfirst($batch->course->title) }}</a>
											<div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i> {{ $batch->code }}</div>
										</div>
									</div>
								</td>
								<td>
									<span class="text-muted font-size-sm">{{ $batch->start }}</span>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- /daily sales -->
		</div>
	</div>
	<!-- /dashboard content -->
@endsection
