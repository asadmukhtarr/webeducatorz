@extends('layouts.portal')
@section('title','Fee Collection')
@section('content')
	<div class="card card-primary">
		<div class="card-header ">
			<h4>Online Adminssions Requests</h4>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>City</th>
					<th>Degree</th>
					<th>Course</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>
							{{ ucfirst($aboutstudent->name) }}
						</td>
                        <td>
							{{ $aboutstudent->email }}
						</td>
						<td>
							{{ $aboutstudent->phone }}
						</td>
						<td>
							{{ $aboutstudent->city }}
						</td>
						<td>
							{{ $aboutstudent->degree }}
						</td>
						<td>
							{{ $aboutstudent->course }}
						</td>
					</tr>
			</tbody>
		</table>
	</div>
    <div>
        <form action="{{route('notesubmit',$aboutstudent->id)}}" method="post">
            @csrf
            <label class="title" for="">Description</label>
            <textarea class="form-control" name="note" id="" cols="140" rows="10"></textarea>
            <button class="btn btn-primary pull-right mt-3">Update</button>
        </form>
    </div>
@endsection