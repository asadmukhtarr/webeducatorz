@extends('layouts.portal')
@section('content')
<section class="container">
    <form action="{{ route('save.event') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="image-upload" />
                </div>
                <font color="red"> 
                    <b> @error('image') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-9">
                <label class="title">Event Title</label>
                <input type="text" class="form-control" value="{{ old('title') }}" placeholder="Event Title" name="title" />
                <font color="red"> 
                    <b> @error('title') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
                <br />
                <label class="title">Category</label>
                <select class="form-control selectric" name="category">
                    <option>Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <font color="red"> 
                    <b> @error('category') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
                <br />
               <div class="row">
                   <div class="col-lg-6">
                        <label class="title">Start Time</label>
                        <input type="time" value="{{ old('start') }}" class="form-control" name="start" value="">
                        <font color="red"> 
                            <b> @error('start') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                   </div>
                   <div class="col-lg-6">
                        <label class="title">End Time</label>
                        <input type="time" value="{{ old('end') }}" class="form-control" name="end" value="">
                        <font color="red"> 
                            <b> @error('end') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                   </div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <label for="" class="title">Description</label>
                <textarea class="summernote-simple" value="{{ old('description') }}" name="description"></textarea>
                <font color="red"> 
                    <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <label for="" class="title">Meta Description</label>
                <textarea class="form-control" name="meta" rows="5"></textarea>
                <font color="red"> 
                    <b> @error('meta') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="" class="title">Date</label>
                <input type="date" name="date" value="{{ old('date') }}" class="form-control" />
                <font color="red"> 
                    <b> @error('date') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-6">
                <label for="" class="title">Registration Link</label>
                <input type="text" name="reg_link" value="{{ old('reg_link') }}" class="form-control" />
                <font color="red"> 
                    <b> @error('reg_link') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-6">
                <label for="" class="title">Amount</label>
                <input type="text" name="amount" value="" class="form-control" />
                <font color="red"> 
                    <b> @error('date') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-6">
                <label for="" class="title">Event Is By</label>
                <input type="text" name="eventby" value="{{ old('reg_link') }}" class="form-control" />
                <font color="red"> 
                    <b> @error('reg_link') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="" class="title">Type</label>
                <select class="form-control selectric"  name="type">
                    <option value="online">Online</option>
                    <option value="physical">Physical</option>
                    <option value="physical + online">Physical + Online</option>
                </select>
                <font color="red"> 
                    <b> @error('type') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
            <div class="col-lg-6">
                <label for="" class="title">Meeting Link</label>
                <input type="text" value="{{ old('meeting') }}" name="meeting" value="" class="form-control" />
                <font color="red"> 
                    <b> @error('meeting') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>   
        <div class="row">
            <div class="col-sm-12">
                <label class="title col-form-label text-md-right">Tags</label>
                <span><font color="red"><b>Press Alt after write tag</b></font></span> 
                <input type="text" value="{{ old('tags') }}" name="tags" class="form-control inputtags">
                <font color="red"> 
                        <b> @error('tags') <span class="error">{{ $message }}</span> @enderror </b>
                </font>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-danger pull-right">Launch Event</button>
            </div>
        </div>
        
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function() {
        $("button").keydown(function(event){
            if(event.keyCode == 13) {
            event.preventDefault();
            return false;
            }
        });
    });
</script>
@endsection