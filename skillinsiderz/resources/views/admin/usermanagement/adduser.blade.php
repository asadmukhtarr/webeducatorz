@extends('layouts.portal')
@section('title','Add User')
@section('content')
<div>
    <div class="container">
        <form action="{{ route('save.users') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                <div class="col-lg-3">
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="image" id="image-upload" />
                    </div>
                    <font color="red"> 
                        <b> @error('photo') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="col-lg-9">
                    <label class="title"> Name 
                        <font color="red"> 
                            <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <input type="text" placeholder="Name" value="{{ old('name') }}" class="form-control" name="name" />
                    <label class="title"> Email 
                        <font color="red"> 
                            <b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <input type="text" placeholder="Email" value="{{ old('email') }}"  class="form-control" name="email" />
                    <label class="title"> Phone 
                        <font color="red"> 
                            <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <input type="text" placeholder="phone" value="{{ old('phone') }}" name="phone" class="form-control"  />
                    <label class="title"> Role 
                        <font color="red"> 
                            <b> @error('role') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <select class="form-control selectric" name="role">
                        <option value="">Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach                        
                    </select>
                    <input type="hidden" name="is_admin" value="1">
                </div>
            </div> <br />
            <div class="row">
                <div class="col-lg-12">
                    <label for=""><b> Description </b></label>
                    <font color="red"> 
                                <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                    <textarea class="summernote" name="description">
                            {{old('description')}}
                    </textarea>
                </div>
                <div class="col-lg-6">
                    <label for="" class="title">
                        Password
                        <font color="red"> 
                            <b> @error('password') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <input type="password" value="{{ old('password') }}" class="form-control" name="password">
                </div>
                <div class="col-lg-6">
                    <label for="" class="title">
                        Confrim Password
                        <font color="red"> 
                            <b> @error('password') <span class="error">{{ $message }}</span> @enderror </b>
                        </font> 
                    </label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password_confirmation">
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> Save User</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
