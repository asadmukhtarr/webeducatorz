@extends('layouts.portal')
@section('title','Create Student')
@section('content')
<div class="container">
	<form method="post" action="{{ route('save.student') }}" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h6>Select your course </h6>
						<select class="form-control" name="course" id="stucourse">
							<option>Select Course</option>
							@foreach($courses as $course)
								<option value="{{ $course->id }}">{{ $course->title }}</option>
							@endforeach    
						</select> 
						<font color="red"> 
							<b> @error('course') <span class="error">{{ $message }}</span> @enderror </b>
						</font>
						<br />
						<h6>Select your Badge</h6>
						<select class="form-control form-control-lg" name="badge" stu="badge" id="stubadges">
							<option>Select Badge</option>
						</select>
						<font color="red"> 
							<b> @error('badge') <span class="error">{{ $message }}</span> @enderror </b>
						</font> 
						<br />
						<h6>Student ID</h6>
						<input type="text" class="form-control" id="stuid" name="stuid"> <br />
						<font color="red"> 
							<b> @error('stuid') <span class="error">{{ $message }}</span> @enderror </b>
						</font> 
					</div>
				</div>
			</div>
		</div>
		<div class="card">
		 	<div class="card-header">
		 		<h5>Personal Information</h5>
		 	</div>
		 	<div class="card-body">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<label class="title" for="email">Name of Trainee</label>
								<input type="text" class="form-control"   name="name">
								<font color="red"> 
									<b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
								</font> 
								<label class="title" for="email">Father Name</label>
								<input type="tel" class="form-control"   name="fname">
								<font color="red"> 
									<b> @error('fname') <span class="error">{{ $message }}</span> @enderror </b>
								</font> 
								<label class="title" for="Contact no">Trainee Contact no</label>
								<input type="tel" class="form-control"   name="trainer_contact">
								<font color="red"> 
									<b> @error('trainer_contact') <span class="error">{{ $message }}</span> @enderror </b>
								</font> 
								<label class="title" for="DOB">Date of Birth</label>
								<input type="date" class="form-control" id="Date"  name="dob">
								<font color="red"> 
									<b> @error('dob') <span class="error">{{ $message }}</span> @enderror </b>
								</font> 
								<label class="title" for="DOB">Email</label>
								<input type="email" class="form-control"   name="email">
								<font color="red"> 
									<b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
								</font> 
						</div>
						<div class="col-lg-6 col-md-6">
							<label class="title" for="number">Trainee CNIC No</label>
							<input type="text" class="form-control"  name="trainer_cnic">
							<font color="red"> 
								<b> @error('trainer_cnic') <span class="error">{{ $message }}</span> @enderror </b>
							</font> 
							<label class="title" for="gener">Gender</label> <br />
							Male <input type="radio" name="gender" value="male" />
							female <input type="radio" name="gender" value="female" />
							<font color="red"> 
								<b> @error('gender') <span class="error">{{ $message }}</span> @enderror </b>
							</font>  <br /> <br />
							<label class="title" for="Contact no">Father Contact No:</label>
							<input type="tel" class="form-control" id="email"  name="fcontact">
							<font color="red"> 
								<b> @error('fcontact') <span class="error">{{ $message }}</span> @enderror </b>
							</font>  
							<label class="title" for="DOB">Religion</label>
							<select name="religious" class="form-control">
								<option value="muslim">Muslim</option>
								<option value="non muslims">Non Muslim</option>
							</select>
							<font color="red"> 
								<b> @error('religious') <span class="error">{{ $message }}</span> @enderror </b>
							</font>  
							<label class="title" for="gener">Reference</label> <br />
							Physical <input type="radio" name="reference" value="physical marketing" />
							Social Media <input type="radio" name="reference" value="Social Media Marketing" />
							<font color="red"> 
								<b> @error('reference') <span class="error">{{ $message }}</span> @enderror </b>
							</font>  
						</div>
					</div>
			</div>
	    </div>
		<div class="card">
				<div class="card-header">
					<h5>Residential Address</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-6">
							<div class="form-group">
								<label for="" class="title">Address</label>
								<input type="text" class="form-control" id="usr" name="address">
								<font color="red"> 
									<b> @error('address') <span class="error">{{ $message }}</span> @enderror </b>
								</font>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label for="" class="title">City</label>
								<input type="text" class="form-control" id="usr" name="city">
								<font color="red"> 
									<b> @error('city') <span class="error">{{ $message }}</span> @enderror </b>
								</font>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label for="" class="title">State</label>
								<input type="text" class="form-control" id="usr" name="state">
								<font color="red"> 
									<b> @error('state') <span class="error">{{ $message }}</span> @enderror </b>
								</font>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label for="" class="title">Country</label>
								<input type="text" class="form-control" id="usr" value="Pakistan" name="country">
								<font color="red"> 
									<b> @error('country') <span class="error">{{ $message }}</span> @enderror </b>
								</font>
							</div>
						</div>	
					</div>
				</div>
		</div>
		<div class="card">
				<div class="card-header">
					<h5>Last Academic Information</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Degree</th>
								<th>Institute/University</th>
								<th>Year Completion</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<input type="text" class="form-control" id="usr" name="degree">
									<font color="red"> 
										<b> @error('degree') <span class="error">{{ $message }}</span> @enderror </b>
									</font>
								</td>
								<td>
									<input type="text" class="form-control" id="usr" name="institute">
									<font color="red"> 
										<b> @error('institute') <span class="error">{{ $message }}</span> @enderror </b>
									</font>
								</td>
								<td>
									<input type="text" class="form-control" id="usr" name="year">
									<font color="red"> 
										<b> @error('year') <span class="error">{{ $message }}</span> @enderror </b>
									</font>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
	 	</div>
		<div class="row">
			<div class="col-lg-12">
				<button type="submit" class="btn btn-danger float-right"> <i class="fa fa-save"></i> Save </button>
			</div>
		</div>
    </form>
</div>
@endsection
