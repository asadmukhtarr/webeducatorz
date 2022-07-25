@extends('layouts.portal')
@section('title','Expense')
@section('content')
<div class="container">
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
    <div class="card card-primary">
        <div class="card-header">
            <label for="" class="title">
                Add Expense Category
            </label>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>
                        Category
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                <tr>
                    <form action="{{ route('accounts.savecategory') }}" method="post">
                        @csrf
                        <td colspan="2">
                            <input type="text" name="name" class="form-control" value="" />
                            <font color="red"> 
                                <b> @error('name') <span class="error">{{ $message }}</span> @enderror </b>
                            </font>
                        </td>
                        <td>
                        <button type="submit" class="btn btn-danger"><b>+</b></button>
                        </td>
                    </form>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{ route('accounts.categoryedit', $category->id) }}">
                            <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('accounts.categorydelete', $category->id) }}">
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection