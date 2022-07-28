@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
	<section class="gray mt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="card shadow">
						<div class="card-header">
							<h5> <i class="la la-user"></i> Become Instructor And Earn Online</h5>
						</div>
						<div class="card-body">
						@if(Session::has("message"))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif
							<form method="post" action="{{ route('teacher_admission_apply') }}">
								@csrf
								<div class="form-group">
									<label>Name</label>
									@error('name')
										<font color="red">{{ $message }}</font>
									@enderror
									<input type="text" placeholder="Your Full Name" class="form-control simple" name="name">
								</div>
								<div class="form-group">
									<label>Email</label>
									@error('email')
										<font color="red">{{ $message }}</font>
									@enderror
									<input type="text" placeholder="Your Email" class="form-control simple" name="email">
								</div>
								<div class="form-group">
									<label>Phone</label>
									@error('phone')
										<font color="red">{{ $message }}</font>
									@enderror
									<input type="text" placeholder="Your Phone" class="form-control simple" name="phone">
								</div>
								<div class="form-group">
									<label>City</label>
									@error('city')
										<font color="red">{{ $message }}</font>
									@enderror
									<input type="text" placeholder="City" class="form-control simple" name="city">
								</div>
								<div class="form-group">
									<label>Qualification</label>
									@error('degree')
										<font color="red">{{ $message }}</font>
									@enderror
									<input type="text" placeholder="Your Last Degree" class="form-control simple" name="degree">
								</div>
								<div class="form-group">
									<label>How You Know About Us</label>
									<select class="form-control simple" name="marketing">
										<option value="1">Social Media</option>
										<option value="2">From A Friend</option>
									</select>
								</div>
								<div class="form-group">
									<label>Which Course You Want apply</label>
									<select class="form-control simple" name="course">
										<option>Select Course</option>
										@foreach($courses as $course)
											<option value="{{ $course->id }}">{{ $course->title }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-danger float-right">Apply Online</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>	
@endsection