@extends('layouts.portal')
@section('title','Add Staff')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <label for="" class="title">Add Employee</label>
        </div>
        <div class="card-body">
            <form action="{{ route('staff.save') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                             <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload" />
                            </div>
                            <font color="red"> 
                                <b> @error('image') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="form-group">
                            <label class="title">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            <font color="red"> 
                                <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="form-group">
                            <label class="title">Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                            <font color="red"> 
                                <b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="form-group">
                            <label class="title">Phone</label>
                            <input type="tel" class="form-control" name="phone" value="{{old('phone')}}">
                            <font color="red"> 
                                <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="title">Emergency Contact</label>
                    <input type="tel" class="form-control" name="ec" value="{{old('ec')}}">
                    <font color="red"> 
                        <b> @error('ec') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">CNIC</label>
                    <input type="text" class="form-control" name="cnic" value="{{old('cnic')}}">
                    <font color="red"> 
                        <b> @error('cnic') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Address</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    <font color="red"> 
                        <b> @error('address') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Salary Package</label>
                    <input type="text" class="form-control" name="salary" value="{{old('salary')}}">
                    <font color="red"> 
                        <b> @error('salary') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label for="" class="title">Description</label>
                    <font color="red"> 
                        <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                    <textarea class="summernote" name="description">
                        {{old('description')}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label class="title">Degination</label>
                    <select class="form-control selectric" name="designation">
                        <option value="">Select Designation</option>
                        @foreach($designations as $designation)
                            <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                        @endforeach
                    </select>
                    <font color="red"> 
                        <b> @error('designation') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-right">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection