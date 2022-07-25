@extends('layouts.portal')
@section('title','Students')
@section('content')
<div>
	<div class="card">
	  <div class="card-header">
	    <h4>Students</h4>
		<button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
	  </div>
	  <div class="card-body">
	    <div class="table-responsive">
	      <table class="table table-striped" id="tableExport">
	        <thead>
	          <tr>
	            <th>Name</th>
	            <th>phone</th>
	            <th>Joining Date</th>
	            <th>Pending Balance</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody>
				@foreach($students as $student)
		        <tr>
		            <td>{{ $student->name }}</td>
		            <td class="align-middle">
						{{ $student->phone }}
		            </td>
		            <td>{{ $student->created_at->diffForHumans(); }}</td>
		            <td>
					  @php
					  	$pending = 0;
					  @endphp
		              @foreach($student->fee as $fee)
					 	@php
					  		$pending = $pending + $fee->pending;
						@endphp
					  @endforeach
					  Rs {{ $pending }}
		            </td>
		            <td><a href="{{ route('student',$student->id) }}" class="btn btn-primary">Detail</a></td>
	          	</tr>
				@endforeach
	        </tbody>
	      </table>
	    </div>
	  </div>
	</div>
</div>
<script src="{{ asset('assets/js/app.min.js')}}"></script>
<script src="{{ asset('assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/page/datatables.js')}}"></script>
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
@endsection
