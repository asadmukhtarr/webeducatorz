@extends('layouts.app')
@section('title','Skillinsiderz | Pakistan Skills Professional Hub')
@section('content')
			
<div class="pagehding-sec">
	<div class="images-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-heading">
					<h1>contact us</h1>
				</div>
				<div class="breadcrumb-list">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="#">page</a></li>
						<li><a href="#">contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contact-page-sec pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="contact-page-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13608.897268710713!2d74.2614778!3d31.4905175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafa64e529f0f6efa!2sSkillinsiderz%20-%20Short%20Courses%20In%20Lahore%20Pakistan!5e0!3m2!1sen!2s!4v1644821035381!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-info">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="contact-info-text">
								<h2>Address</h2>
								<span>{{ ucfirst(App\Models\general::find(1)->address) }}</span>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="contact-info-text">
							<h2>e-mail</h2>
							<span><a href="https://themeearth.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="65060a0815040b1c250208040c094b060a08">{{ App\Models\general::find(1)->email; }}</a></span>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="contact-info-text">
							<h2>Phone Number</h2>
							<span> <i class="fa fa-whatsapp"></i> {{ App\Models\general::find(1)->phone }}</span>
							<span> <i class="fa fa-phone"></i> {{ App\Models\general::find(1)->phone1 }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="contact-page-form">
					<h2>Send your message</h2>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-input-field">
							<input type="text" placeholder="First Name" />
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-input-field">
							<input type="text" placeholder="Last Name" />
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-input-field">
							<input type="text" placeholder="Phone Number" />
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-input-field">
						<input type="email" placeholder="E-mail" />
					</div>
				</div>
				<div class="col-md-12 message-input">
					<div class="single-input-field">
						<textarea placeholder="Write Your Message"></textarea>
					</div>
				</div>
				<div class="single-input-fieldsbtn">
					<input type="submit" value="Send Now" />
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection