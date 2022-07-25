@extends('layouts.portal')
@section('content')
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Write Your Post</h4>
                  </div>
                  <div class="card-body">
                    <form actiond="{{ route('post.update',$blog->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                            
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="category">
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                          <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" name="meta" rows="5">{{ $blog->meta }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                          <div class="col-sm-12 col-md-7">
                            <textarea class="summernote-simple" name="description">{{ $blog->description }}</textarea>
                            
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                          <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                              <label for="image-upload" id="image-label">Choose File</label>
                              <input type="file" name="image" id="image-upload" />
                            </div>
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" name="tags" class="form-control inputtags">
                          </div>
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                          <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" id="type" name="type">
                              <option> Select Software</option>
                              <option value="1">Share Software</option>
                              <option value="2">Blog Post</option>
                            </select>
                          </div>
                        </div>
                        <div id="link">
                          
                        </div>
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                          <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Create Post</button>
                          </div>
                        </div>
                    </form>    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function() {
      $("#type").on('change',function(){
        var v = $(this).val();
        if(v == 1 ){
          $("#link").append("<div class='form-group row mb-4'><label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'>Software Link</label><div class='col-sm-12 col-md-7'><input type='text' name='link' class='form-control'><font color='red'><b> @error('type') <span class='error'>{{ $message }}</span> @enderror </b></font></div></div>");
        }
      });
    });
</script>
@endsection