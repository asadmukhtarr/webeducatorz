@extends('layouts.portal')
@section('title','Profile')
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card author-box">
            <div class="card-body">
              <div class="author-box-center">
                <img alt="image" src="https://management.infinitetechnologyinstitute.com/public/{{ Auth::user()->thumbnail }}" class="rounded-circle author-box-picture">
                <div class="clearfix"></div>
                <div class="author-box-name mt-3">
                  <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                </div>
              </div>
              <div class="text-center">
                <div class="author-box-description">
                  <p class="text-justify">
                    {!! Auth::user()->desrciption !!}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Personal Details</h4>
            </div>
            <div class="card-body">
              <div class="py-4">
                <p class="clearfix">
                  <span class="float-left">Full Name</span>
                  <span class="float-right text-muted">{{ Auth::user()->name }}</span>
                </p>
                <p class="clearfix">
                  <span class="float-left">Email</span>
                  <span class="float-right text-muted">{{ Auth::user()->email }}</span>
                </p>
                <p class="clearfix">
                  <span class="float-left">Phone</span>
                  <span class="float-right text-muted">{{ Auth::user()->phone }}</span>
                </p>
                <p class="clearfix">
                  <span class="float-left">Since</span>
                  <span class="float-right text-muted">{{ Auth::user()->created_at->diffForHumans() }}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('update_user_profile',Auth::user()->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <h5 class="text-dark">Update Information</h5>
                <div class="row">
                  <div class="col-lg-5">
                    <div id="image-preview" class="my-3 image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="mt-3">
                      <input type="text" name="uname" class="form-control" value="{{ Auth::user()->name }}" placeholder="Update name">
                      <input type="text" name="uemail" class="form-control my-3" value="{{ Auth::user()->email }}" placeholder="Update email address">
                      <input type="text" name="uphone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="Update Phone number">
                      <textarea class="form-control my-3" name="description">{!! Auth::user()->desrciption !!}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button class="btn btn-success rounded-pill w-25">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection