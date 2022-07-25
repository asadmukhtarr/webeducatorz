@extends('layouts.portal')
@section('title','Add User')
@section('content')
<div>
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card card-primary">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Url Slug</th>
                    <th>Route Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <form action="{{ route('permission.save') }}" method="post">
                        @csrf
                        <td>
                            <input type="text" value="{{ old('title') }}" class="form-control" placeholder="Title" name="title" /> 
                            <font color="red"> 
                                <b> @error('title') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                            <input type="text" value="{{ old('slug') }}"  class="form-control" placeholder="Slug" name="slug" /> 
                            <font color="red"> 
                                <b> @error('slug') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                            <input type="text" value="{{ old('route_name') }}"  class="form-control" placeholder="Route" name="route_name" />
                            <font color="red"> 
                                <b> @error('route_name') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> Save</button>
                        </td>
                    </form>
                </tr>
                @foreach($permissions as $permission)
                <tr>
                    <td>
                        {{ $permission->name }}
                    </td>
                    <td>
                        {{ $permission->slug }}
                    </td>
                    <td>
                        {{ $permission->route_name }}
                    </td>
                    <td>
                        <a href="{{ route('edit.permission', $permission->id) }}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                        <a href="{{ route('delete.permission', $permission->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
