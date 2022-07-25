@extends('layouts.portal')
@section('title','Create Badge')
@section('content')
<div>
    <div class="row sortable-card">
            <div class="col-lg-12">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif  
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Start</th>
                            <th>End</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <form action="{{ route('create.slot') }}" method="post">
                                @csrf
                                <td>
                                    <input type="time" class="form-control" name="s" />
                                </td>
                                <td>
                                    <input type="time" class="form-control" name="e" />
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary"> Add </button>
                                </td>
                            </form>    
                        </tr>
                    </table>
                    <div class="card card-primary">
                    <div class="card-header">
                        <h4>Slots</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Start</th>
                                <th>End</th>
                                <th>Action</th>
                            </tr>
                            @foreach($slots as $slot)
                                <tr>
                                    <td >{{  date("g:i a", strtotime( $slot->start)); }}</td>
                                    <td >{{  date("g:i a", strtotime( $slot->end)); }}</td>
                                    <td>
                                        <a href="{{ route('remove.slot',$slot->id) }}">
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </a>    
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Room Number</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <form action="{{ route('create.room') }}" method="post">
                                @csrf
                                <td>
                                    <input type="number" placeholder="Room Number" class="form-control" name="room" />
                                </td>
                                <td>
                                    <button class="btn btn-primary"> Add </button>
                                </td>
                            </form>    
                        </tr>
                    </table>
                    <div class="card card-primary">
                    <div class="card-header">
                        <h4>Rooms</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                                    <tr>
                                        <th colspan="2">Room #</th>
                                        <th>Action</th>
                                    </tr>
                                @foreach($rooms as $room)
                                    <tr>
                                        <td colspan="2">
                                            {{ $room->room }}
                                        </td>
                                        <td>
                                            <a href="{{ route('remove.room',$room->id) }}">
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
@endsection
