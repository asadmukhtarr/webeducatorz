@extends('layouts.portal')
@section('title','Add Course')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Permissions</h4>
        </div>
        <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <form action="{{ route('assign.permissions', $role->id) }}" method="post">
                    @csrf
                   
                    @foreach($permissions as $permission)
                    <li class="list-group-item">
                        @if(in_array($permission->id,$grant_permission))
                        <input type="checkbox" name="permission[]" class="permission_check" value="{{$permission->id}}" id="permission{{$permission->id}}" checked>  <label for="permission{{$permission->id}}">{{$permission->name}}</label>
                        @else
                        <input type="checkbox" name="permission[]" class="permission_check" value="{{$permission->id}}" id="permission{{$permission->id}}">  <label for="permission{{$permission->id}}">{{$permission->name}}</label>
                        @endif
                        
                    </li>
                    @endforeach
                    <br />
                    <button type="submit" class="btn btn-danger pull-right"> <i class="fa fa-save"></i> Allow </button>
            </form>
        </div>
    </div>
</div>
@endsection