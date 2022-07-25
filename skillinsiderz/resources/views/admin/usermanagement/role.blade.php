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
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <form action="{{ route('save.role') }}" method="post">
                        @csrf
                        <td>
                            <input type="text" class="form-control" placeholder="Title" name="title" /> 
                            <font color="red"> 
                                <b> @error('title') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                            <select class="form-control selectric" name="check" >
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <font color="red"> 
                                <b> @error('status') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> Save</button>
                        </td>
                    </form>
                </tr>
                @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        @if($role->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">InActive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit.role', $role->id) }}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                        <a href="{{ route('assign.permission', $role->id) }}"><button type="button" class="btn btn-warning"><i class="fa fa-key" aria-hidden="true"></i></button></a>
                        <a href="{{ route('role.delete', $role->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
