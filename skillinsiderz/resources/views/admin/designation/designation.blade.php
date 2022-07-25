@extends('layouts.portal')
@section('title','Add User')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <label for="" class="title">Designations</label>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('message') }}
                    </div>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Designation</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <form action="{{ route('create.designation') }}" method="post">
                        @csrf
                        <td colspan="2">
                            <input type="text" placeholder="Designation Name" name="designation" class="form-control" value="">
                            <font color="red"> <b> @error('designation') {{ $message }} @enderror </b> </font>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">Add</button>
                        </td>
                    </form>
                </tr>
                @foreach($designations as $designation)
                 <tr>
                     <td>
                         {{ $designation->name }}
                     </td>
                     <td>
                        <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                     </td>
                     <td>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                     </td>
                 </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
