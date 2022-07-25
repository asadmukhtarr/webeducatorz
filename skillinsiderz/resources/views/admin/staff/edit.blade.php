@extends('layouts.portal')
@section('title','Add Staff')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <label for="" class="title">Edit Employee</label>
        </div>
        <div class="card-body">
            <form action="{{ route('update.staff', $staff->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="title">Status</label>
                    <select class="form-control selectric" name="status">
                        <option value="">Select Status</option>
                        <option value="1" {{ ( $staff->status == 1) ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ ( $staff->status == 2) ? 'selected' : '' }}>Left</option>
                    </select>
                    <font color="red"> 
                        <b> @error('status') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $staff->name }}">
                    <font color="red"> 
                        <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $staff->email }}">
                    <font color="red"> 
                        <b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Phone</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $staff->phone }}">
                    <font color="red"> 
                        <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Emergency Contact</label>
                    <input type="tel" class="form-control" name="ec" value="{{ $staff->ec }}">
                    <font color="red"> 
                        <b> @error('ec') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">CNIC</label>
                    <input type="text" class="form-control" name="cnic" value="{{ $staff->cnic }}">
                    <font color="red"> 
                        <b> @error('cnic') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $staff->address }}">
                    <font color="red"> 
                        <b> @error('address') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <label class="title">Salary Package</label>
                    <input type="text" class="form-control" name="salary" value="{{ $staff->salary }}">
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
                         {{ $staff->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label class="title">Degination</label>
                    <select class="form-control selectric" name="designation">
                        <option value="">Select Designation</option>
                        @foreach($designations as $designation)
                            <option {{ ( $staff->designation_id == $designation->id) ? 'selected' : '' }} value="{{ $designation->id }}">{{ $designation->name }}</option>
                        @endforeach
                    </select>
                    <font color="red"> 
                        <b> @error('designation') <span class="error">{{ $message }}</span> @enderror </b>
                    </font>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-right">Updated Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection