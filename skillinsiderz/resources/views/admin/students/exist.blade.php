@extends('layouts.portal')
@section('title','Create Student')
@section('content')
<div class="container">
	<form method="post" action="{{ route('save.exist') }}" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h6>Select your course </h6>
						<select class="form-control selectric" name="course_id" id="stucourse">
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
						<select class="form-control form-control-lg" name="badge_id" stu="badge" id="stubadges">
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
                        <h6>Select Student</h6>
                        <select class="form-control" name="student_id">
                            <option value="">Select Student</option>
                            @foreach($students as $student)
                            <option value="{{ $student->id }}">{{ ucfirst($student->name) }} - {{ ucfirst($student->phone) }} </option>
                            @endforeach
                        </select>
                        <font color="red"> 
                            <b> @error('student_id') <span class="error">{{ $message }}</span> @enderror </b>
                        </font> 
					</div>
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
