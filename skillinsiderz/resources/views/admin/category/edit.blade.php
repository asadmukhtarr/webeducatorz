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
                        <form action="{{ route('update.category', $category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload" />
                            </div>
                            <label for=""><font color="red"><b>Please Upload Image Only If You Want To Change</b></font></label>
                            <div class="form-group">
                                <label for="" class="title">Name</label>
                                <input type="text" value="{{ $category->category }}" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> Update </button>
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
                                    <button type="button" data-toggle="modal" data-target="#basicModal" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                
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
