@extends('layouts.portal')
@section('title','Fee Collection')
@section('content')
	<div class="card card-primary">
		<div class="card-header justify-content-center">
			<h4>Online Adminssions Requests</h4>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Course</th>
					<th>City</th>
					<th>Date</th>
					<th>Status</th>
					<th>Action</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($admissions as $admission )
					<tr>
						<td>
							{{ ucfirst($admission->name) }}
						</td>
						<td>
							{{ $admission->phone }}
						</td>
						<td>
							{{ App\Models\course::find($admission->course)->title }}
						</td>
						<td>
							{{ $admission->city }}
						</td>
						<td>
							{{ $admission->created_at }}
						</td>
						<td>
							<span class="badge badge-secondary">
								Pending
							</span>
						</td>
						<td>
							<a href="{{route('aboutstudent', $admission->id)}}"><button class="btn btn-warning">Approve</button></a>
							
						</td>
						<td>
							<a href="{{route('disappearstudent', $admission->id)}}"><button class="btn btn-danger">Disapprove</button></a>
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection