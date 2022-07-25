@extends('layouts.portal')
@section('title','Fee Collection')
@section('content')
<div>
	<div class="card">
		<div class="card-body">
			<form action="" method="post">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<label>Select Course</label>
						<select class="form-control" name="">
							<option>Select Course</option>
						</select>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<label>Select Instructor</label>
						<select class="form-control" name="">
							<option>Select Course</option>
						</select>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<label>Start Date</label>
						<input type="date" class="form-control" name="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<label>End Date</label>
						<input type="date" class="form-control" name="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<br />
						<button class="btn btn-lg btn-primary" style="margin-top:7px;"> 
							<i class="fa fa-search"></i> Search 
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="card">
	  <div class="card-header">
	    <h4>Badges</h4>
	  </div>
	  <div class="card-body">
	    <div class="table-responsive">
	      <table class="table table-striped" id="table-1">
	        <thead>
	          <tr>
	            <th class="text-center">
	              Badge #
	            </th>
	            <th>Course</th>
	            <th>progress</th>
	            <th>Students</th>
	            <th>Start Date</th>
	            <th>End Date</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody>
		        <tr>
		            <td>
		              WPC-1-20
		            </td>
		            <td>Create a mobile app</td>
		            <td class="align-middle">
		              <div class="progress progress-xs">
		                <div class="progress-bar bg-success width-per-40">
		                </div>
		              </div>
		            </td>
		            <td>
		              2018-01-20
		            </td>
		            <td>2018-01-20</td>
		            <td>
		              <div class="badge badge-success badge-shadow">Completed</div>
		            </td>
		            <td><a href="#" class="btn btn-primary">Detail</a></td>
	          	</tr>
	        </tbody>
	      </table>
	    </div>
	  </div>
	</div>
</div>
