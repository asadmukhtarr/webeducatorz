@extends('layouts.portal')
@section('title','Create Teacher')
@section('content')
<div>
   <div class="container">
        <form action="{{ route('update.teacher', $teacher->id) }}" enctype="multipart/form-data" method="post" >
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
                                <b>Only Upload, If you want to change</b>
                            </font>
                            <font color="red"> 
                                <b> @error('image') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="col-lg-9">
                            <label class="title"> Full Name </label>
                            <input type="text" placeholder="Full Name" value="{{ $teacher->name }}" class="form-control" name="name" />
                            <font color="red"> 
                                <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                            <br />
                            <label class="title"> Email </label>
                            <input type="text" placeholder="Email" class="form-control"  value="{{ $teacher->email }}" name="email" />
                            <font color="red"> 
                                <b> @error('email') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                            <br />
                            <label class="title"> Upload Documents In PDF  </label> <br />
                            <input type="file" name="document" />
                            <font color="red"> 
                                <b>Only Upload, If you want to change</b>
                            </font>        
                            <font color="red"> 
                                <b> @error('document') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 field">
                    <label class="title">
                        Description
                        <font color="red"> 
                            <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                    </label>
                    <textarea class="summernote" name="description">
                        {{ $teacher->description }}
                    </textarea>
                </div>
                <div class="col-lg-12 field">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="title"> Phone #  </label>
                            <input type="tell" placeholder="Phone" class="form-control" value="{{ $teacher->phone }}" name="phone" />
                            <font color="red"> 
                                    <b> @error('phone') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="col-lg-6">
                            <label class="title"> Alternative Phone #  </label>
                            <input type="tell" placeholder="Alternative Phone Number" value="{{ $teacher->phone2 }}" class="form-control" name="aphone" />
                            <font color="red"> 
                                <b> @error('aphone') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 field">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="title"> Address  </label>
                            <input type="text" placeholder="Address" value="{{ $teacher->address }}" class="form-control" name="address" />
                            <font color="red"> 
                                <b> @error('address') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 field">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="title"> CNIC  </label>
                            <input type="text" placeholder="CNIC" class="form-control" value="{{ $teacher->cnic }}" name="cnic" />
                            <font color="red"> 
                                <b> @error('cnic') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="col-lg-6">
                            <label class="title"> Category </label>
                            <select class="form-control selectric" name="category">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option  value="{{ $category->id }}" {{ ( $category->id == $teacher->category_id) ? 'selected' : '' }}>{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <font color="red"> 
                                <b> @error('category') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 field">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="title"> Upload MOU  </label>
                            <input type="file" name="mou" />
                            <font color="red"> 
                                <b>Only Upload, If you want to change</b>
                            </font>    
                            <font color="red"> 
                                <b> @error('mou') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                        <div class="col-lg-6">
                            <label class="title"> Upload CNIC  </label>
                            <font color="red"> 
                                <b>Only Upload, If you want to change</b>
                            </font>    
                            <input type="file" name="cnic_i" />
                            <font color="red"> 
                                <b> @error('cnic_i') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 field">
                    <div class="row">
                        <div class="col-lg-12">
                        <button class="btn btn-info pull-right"> <i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
   </div>
</div>
@endsection