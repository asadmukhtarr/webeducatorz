@extends('layouts.portal')
@section('title','Add Catgoery')
@section('content')
<div>
   <form action="">
       <div class="form-group">
           <label for="" class="title">Name</label>
           <input type="text" class="form-control" wire:model="name" />
       </div>
       <div class="form-group">
          <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> save </button>
       </div>
   </form>
</div>
@section
