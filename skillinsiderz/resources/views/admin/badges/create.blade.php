@extends('layouts.portal')
@section('title','Create Badge')
@section('content')
<div>
    <div class="container">
        <form action="{{ route('save.badge') }}" method="post">
            @csrf
            <div class="row">
                    <div class="col-lg-12 field">
                        <h3>Add News Badge</h3>
                        <hr />
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="title"> Select Course </label>
                                <select class="form-control selectric" name="bcourse" id="bcourse">
                                    <option>Select Course</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                                <font color="red"> 
                                    <b> @error('bcourse') <span class="error">{{ $message }}</span> @enderror </b>
                                </font> <br />
                                <label class="title"> Badge Code </label>
                                <input type="text"  value="{{old('code')}}" placeholder="Course Code" class="form-control" name="code" id="code"/>
                                <font color="red"> 
                                    <b> @error('code') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <br />
                                <label class="title"> Badge Fee </label>
                                <input type="text"  value="{{old('fee')}}" placeholder="Days" class="form-control" name="fee" id="fee"/>
                                <font color="red"> 
                                    <b> @error('fee') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <br />
                                <label class="title"> Days </label>
                                <input type="text"  value="{{old('days')}}" placeholder="Days" class="form-control inputtags" name="days" id="fee"/>
                                <font color="red"> 
                                    <b> @error('days') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <br />
                                <label class="title"> Select Trainer </label>
                                <select class="form-control selectric" name="trainer">
                                    <option>Select Trainer</option>
                                    @foreach($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->name }} - {{ $trainer->category->category }} </option>
                                    @endforeach
                                </select>
                                <font color="red"> 
                                    <b> @error('trainer') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 field">
                        <label class="title">Description</label>
                        <font color="red"> 
                            <b> @error('description') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                        <textarea class="summernote" name="description">
                                {{old('description')}}
                        </textarea>      
                    </div>
                    <div class="col-lg-12 field">
                        <div class="row">
                            <div class="col-lg-6">
                            <label class="title"> Start Date </label>
                                <input type="date"  value="{{old('sdate')}}" class="form-control" name="sdate">
                                <font color="red"> 
                                    <b> @error('sdate') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                            <div class="col-lg-6">
                                <label class="title"> End Date </label>
                                <input type="date"  value="{{old('edate')}}" class="form-control" name="edate">
                                <font color="red"> 
                                    <b> @error('edate') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 field">
                        <div class="row">
                            <div class="col-lg-6">
                            <label class="title"> Select Slot </label>
                               <select class="form-control selectric" name="slot">
                                      <option >Select Slot</option>
                                      @foreach($slots as $slot)
                                        <option value="{{ $slot->id }}">{{  date("g:i a", strtotime( $slot->start)); }} - {{  date("g:i a", strtotime( $slot->end)); }}</option>
                                      @endforeach
                               </select>
                               <font color="red"> 
                                    <b> @error('slot') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                            <div class="col-lg-6">
                            <label class="title"> Rooms </label>
                               <select class="form-control selectric" name="room">
                                      <option >Select room</option>
                                      @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{  $room->room }}</option>
                                      @endforeach
                               </select>
                               <font color="room"> 
                                    <b> @error('slot') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 field">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-info pull-right"> <i class="fa fa-save"></i> Publish </button>
                            </div>
                        </div>
                    </div>   
            </div>
        </form> 
   </div>
</div>
@endsection
