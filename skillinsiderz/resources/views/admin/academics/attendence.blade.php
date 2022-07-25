@extends('layouts.portal')
@section('title','Attendence')
@section('content')
<div>
    <div class="card">
		<div class="card-body">
			<form action="" method="post">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<label>Search Visits By Dates</label>
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
</div>
@endsection
