@extends('layouts.portal')
@section('title','Today Visits')
@section('content')
<div>
    <div class="container-fluid">
        <form action="{{ route('visitor.save') }}" method="post">
            @csrf
            <div class="col-lg-8">
                <label for="" class="title">Name</label>
                <input type="text" name="name" class="form-control" />
                <font color="red"> 
                    <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-8">
                <label for="" class="title">Whats App</label>
                <input type="text" name="phone" class="form-control" />
                <font color="red"> 
                    <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-8">
                <label for="" class="title">Email</label>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="col-lg-8">
                <label for="" class="title">Query</label>
                <input type="text" name="reference" class="form-control" />
                <font color="red"> 
                    <b> @error('reference') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-8">
                <label for="" class="title">Course</label>
                <select class="form-control selectric" name="course">
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
                <font color="red"> 
                    <b> @error('course') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-8">
                <label for="" class="title">Details</label>
                <textarea rows="5" name="details" class="form-control"  cols=""></textarea>
                <font color="red"> 
                    <b> @error('details') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-8">
                <br />
                <button type="submit" class="btn btn-danger" style="margin-top:10px;">Save Visitor</button>
            </div>
        </form>    
    </div>
</div>
@endsection
