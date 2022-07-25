@extends('layouts.portal')
@section('title','Create Student')
@section('content')
<div>
    <section class="section">
        <div class="section-body">
            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('message') }}
                    </div>
                </div>
            @endif
            <div class="container-fluid">
                    <form action="{{ route('fee.instalment',$enrollment->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="title">Course </label>
                                <input type="text" class="form-control" value="{{ $enrollment->badge->code }} " disabled/>
                            </div>
                            <div class="col-lg-2">
                                <label class="title">Fee Type</label>
                                <select class="form-control selectric" name="type">
                                    <option value="">Select Type</option>
                                    <option value="1"> One Time </option>
                                    <option value="2"> Instalments </option>
                                </select>
                                @error('type')
                                        <font color="red"><b>{{ $message }}</b></font>
                                    @enderror
                            </div>
                            <div class="col-lg-2">
                                <div id="installmet">
                                    <label for="" class="title">Installments</label>
                                    <input type="text" class="form-control" id="inst" name="inst" value="1" />
                                    @error('inst')
                                            <font color="red"><b>{{ $message }}</b></font>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div id="installmet">
                                    <label for="" class="title">Admission Fee</label>
                                    <input type="text" class="form-control" name="adm" value="{{ $enrollment->course->adm_fee }}" />
                                        @error('adm')
                                            <font color="red"><b>{{ $message }}</b></font>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                    <div id="installmet">
                                        <label for="" class="title">Regular Fee</label>
                                        <input type="text" class="form-control" id="fee" name="fee" value="{{ $enrollment->course->fee }}" />
                                    </div>
                            </div>
                            <div class="col-lg-1">
                                <label for="" class="title">Action</label>
                                 <button type="submit" class="btn btn-lg btn-danger float-right" style="margin-top:-1px;">Save</button>
                            </div>
                </form> 
            </div>    
        </div>
    </section>
</div>    
@endsection