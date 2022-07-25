@extends('layouts.portal')
@section('title','Change Password')
@section('content')
<div class="row justify-content-center">
	<div class="col-lg-5">
		<div class="card">
			<div class="card-body">
				<h5 class="text-dark">Change Password</h5>
				@if(Session::has('message'))
					<div class="alert alert-primary">{{ Session::get('message') }}</div>
				@endif
				@error('currentPassword')
				<div class="alert alert-primary">{{ $message }}</div>
				@enderror
				<form action="{{ route('changePassword') }}" method="post">
					@csrf
					<div class="row">
						<div class="col-lg-12">
							<input type="text" name="currentPassword" value="" class="form-control form-control-lg" placeholder="Current Password">
						</div>
						<div class="col-lg-12" id="password">
							<input type="password" name="password" class="my-3 form-control form-control-lg" placeholder="Password">
						</div>
						<div class="col-lg-12" id="cPassword">						
							<input type="text" name="cPassword" class="form-control form-control-lg" placeholder="Confirm Password">
						</div>
						<div class="col-lg-12">
							<button class="btn btn-info btn-lg btn-block my-3" id="cbutton" style="font-size: 20px ;">Change Password</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

	// function checkPassword(){
	// 	$.ajax({
	// 		type: 'post',
	// 		url: "{{ route('changePassword') }}",
	// 	});
	// }

	$(document).ready(function(){
		// $('#currentPassword').on('change',function(){
			// $('#password').append('<input type="password" name="currentPassword" class="my-3 form-control form-control-lg" placeholder="Password">');
			// $('#cPassword').append('<input type="text" name="currentPassword" class="form-control form-control-lg" placeholder="Confirm Password">	');
			// $('#cbutton').html('Update Password');
			// $('#currentPassword').hide();
		// });
		// $('#currentPassword').changePassword();
	});
</script>
@endsection