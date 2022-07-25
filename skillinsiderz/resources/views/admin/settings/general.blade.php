@extends('layouts.portal')
@section('title','Profile')
@section('content')
<div class="container">
    @if (session()->has('message')) 
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{ session('message') }}
            </div>
        </div>
    @endif
    <div class="card card-primary">
        <div class="card-header">
            <b> generall Settings </b>
        </div>
        <div class="card-body">
            <form action="{{ route('general.post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload" />
                            </div>
                            <font color="red"> 
                                <b>
                                    Upload Logo For Website If, Required
                                </b>
                            </font>
                            <font color="red"> 
                                <b> @error('image') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                    </div>
                    <div class="col-lg-9">
                            <div class="container-fluid">
                                <label for="" class="title"> <b> Website Title </b> </label>
                                <input type="text" value="{{ $general->title }}" class="form-control" name="title" value="">
                                <font color="red"> 
                                    <b> @error('title') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <br />
                                <label class="title">Tags</label>
                                <input type="text" name="tags" value="{{ $general->tags }}" class="form-control inputtags">
                                <font color="red"> 
                                    <b> @error('tags') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <br />
                                <label class="title">Website Icon</label> 
                                <font color="red"> 
                                    <b>
                                        Upload Icon For Website If, Required
                                    </b>
                                </font>
                                <br />
                                <input type="file" name="icon" >
                               
                            </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="" class="title"> <b> Meta Description </b> </label>
                    <textarea rows="10" class="form-control" name="description" cols="">
                        {{ $general->description }}
                    </textarea>
                    <font color="red"> 
                        <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6">
                          <label for="">Whats App Number</label>
                          <input type="text" name="whatsapp" value="{{ $general->phone }}" class="form-control" />
                          <font color="red"> 
                                <b> @error('whatsapp') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                      </div>
                      <div class="col-lg-6">
                          <label for="">Phone #</label>
                          <input type="text" name="phone" value="{{ $general->phone1 }}" class="form-control" />
                          <font color="red"> 
                                <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                          <label for="">Email</label>
                          <input type="text" name="email" value="{{ $general->email }}" class="form-control" />
                          <font color="red"> 
                                <b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                      </div>
                      <div class="col-lg-6">
                          <label for="">Email (For Admin)</label>
                          <input type="text" name="email1" value="{{ $general->email1 }}" class="form-control" />
                          <font color="red"> 
                                <b> @error('email1') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-lg-12">
                          <label for="">Address</label>
                          <input type="text" name="address" value="{{ $general->address }}" class="form-control" />
                          <font color="red"> 
                                <b> @error('address') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection