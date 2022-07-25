@extends('layouts.portal')
@section('title','Add Course')
@section('content')
<div>
   <div class="container">
       <form action="{{ route('course.save') }}" enctype="multipart/form-data" method="post" >
            @csrf
                <div class="row">
                        <div class="col-lg-12 field">
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
                                    <label class="title"> Course Name </label>
                                    <input type="text" value="{{old('name')}}" placeholder="Course Name" id="course_title" class="form-control" name="name" />
                                    <font color="red"> 
                                        <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                    <br />
                                    <label class="title"> Course Code </label>
                                    <input type="text" readonly  value="{{old('code')}}" placeholder="Course Code" value="" class="form-control" id="code" name="code" />
                                    <font color="red"> 
                                        <b> @error('code') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                    <br />
                                    <label class="title"> Course outline </label>
                                    <input type="file" name="outline"  />

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 field">
                            <label for="" class="title">Meta Description <font color="red"><b>155 length maximum</b></font></label>
                            <font color="red"> 
                                <b> @error('meta') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                            <textarea rows="5" class="form-control" name="meta" name="description">
                                {{old('meta')}}
                            </textarea>
                            
                        </div>
                        <div class="col-lg-12 field">
                            <label for="" class="title">Description</label>
                            <font color="red"> 
                                <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                            <textarea class="summernote" name="description">
                                {{old('description')}}
                            </textarea>
                            
                        </div>
                        <div class="col-lg-12 field">
                        <div class="row">
                            <div class="col-lg-4">
                                    <label class="title">Duration</label>
                                    <input type="text" value="{{old('duration')}}" class="form-control" placeholder="Duration" name="duration" />
                                    <font color="red"> 
                                        <b> @error('duration') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                            </div>
                            <div class="col-lg-4">
                                    <label class="title">Total Number Of Classes</label>
                                    <input type="Number" value="{{old('noc')}}" class="form-control" placeholder="Number Of Classes" name="noc" />
                                    <font color="red"> 
                                        <b> @error('noc') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                            </div>
                                <div class="col-lg-4">
                                <label class="title"> Classes In A Week </label>
                                    <input type="number" value="{{old('ciaw')}}" placeholer="Class In A Week" class="form-control" placeholder="" name="ciaw" />
                                    <font color="red"> 
                                        <b> @error('ciaw') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                        </div>
                        </div>
                        <div class="col-lg-12 field">
                            <div class="row">
                                <div class="col-lg-4">
                                <label class="title"> Regular Fee </label>
                                    <input type="number" value="{{old('regularfee')}}" placeholder="Regular Fee" id="regularfee" class="form-control" name="regularfee" />
                                    <font color="red"> 
                                        <b> @error('regularfee') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                                <div class="col-lg-4">
                                <label class="title"> Discount </label>
                                    <input type="number" value="{{old('discount')}}" placeholder="Discount In %" id="discount" class="form-control" name="discount" />
                                    <font color="red"> 
                                        <b> @error('discount') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                                <div class="col-lg-4">
                                <label class="title"> Discounted Fee </label>
                                    <input type="number" value="{{old('disfee')}}"  placeholder="Discounted Fee" value="" id="discountfee" class="form-control" name="disfee" />
                                    <font color="red"> 
                                        <b> @error('disfee') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 field">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="title"> Admission Fee </label>
                                    <input type="number" class="form-control" name="adm_fee" placeholder="Admission Fee"/>
                                    <font color="red"> 
                                        <b> @error('adm_fee') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                                <div class="col-lg-4">
                                    <label class="title"> Category </label>
                                    <select class="form-control selectric" name="category">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option  value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                    <font color="red"> 
                                        <b> @error('category') <span class="error">{{ $message }}</span> @enderror </b>
                                    </font>
                                </div>
                                <div class="col-lg-4">
                                    <label class="title">  Title Video Link </label>
                                    <input type="text" value="{{old('link')}}" placeholder="Youtube Video Link" class="form-control" name="link" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="title">Tags</label>
                                <input type="text" name="tags" value="{{old('tags')}}" class="form-control inputtags">
                                <font color="red"> 
                                    <b> @error('tags') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                        </div> <br /> <br /> <br />
                        <div class="col-lg-12 field" style="margin-top:2%;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-info pull-right"> <i class="fa fa-save"></i> Publish </button>
                                </div>
                            </div>
                        </div>
                </div>
        </form>
   </div>
</div>
@endsection
