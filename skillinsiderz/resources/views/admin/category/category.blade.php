@extends('layouts.portal')
@section('title','Catgoery')
@section('content')
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card card-primary">
                    <div class="card-header">
                        Add Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('save.category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                            <font color="red"> 
                                <b> @error('image') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </div>
 
                            <div class="form-group">
                                <label for="" class="title">Name</label>
                                <input type="text" class="form-control" name="name" />
                                <font color="red"> 
                                    <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                            <div class="form-group">
                                <label for="" class="title">Description</label>
                                <textarea rows="10" maxlength="100" cols="2" class="form-control" name="description"></textarea>
                                <font color="red"> 
                                    <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                @if (session()->has('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                @endif
               <div class="card card-primary">
                   <div class="card-header">
                       Categories
                   </div>
                   <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Action</th>
                            </tr>
                            @foreach($categories as $category)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/'.$category->thumbnail) }}" height="30" alt="" />
                                </td>
                                <td>
                                    {{$category->category  }}
                                </td>
                                <td>
                                    <a href="{{ route('edit.category',$category->id) }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('delete.category',$category->id) }}">
                                        <button type="submit"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
