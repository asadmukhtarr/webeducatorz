@extends('layouts.portal')
@section('title','Today Visits')
@section('content')
<div>
    <div class="container-fluid">
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
        <div class="card">
            <div class="card-body">
                <form action="{{ route('search.visit') }}" method="search">
                    @csrf
                    <div class="row">
                                <div class="col-sm-2">
                                    <label for=""><b>Name</b></label>
                                    <input type="text" class="form-control " name="name" />
                                    @error('name')
                                    <font color="red">
                                        <b>
                                            {{ $message }}
                                        </b>
                                    </font>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for=""><b>Course</b></label>
                                    <select name="course" class="form-control  selectric" id="">
                                        <option value="">Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ ucfirst($course->title) }}</option>
                                        @endforeach
                                    </select>
                                    @error('course')
                                    <font color="red">
                                        <b>
                                            {{ $message }}
                                        </b>
                                    </font>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label for=""><b>Phone</b></label>
                                    <input type="text" class="form-control " name="phone" />
                                    @error('phone')
                                    <font color="red">
                                        <b>
                                            {{ $message }}
                                        </b>
                                    </font>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for=""><b>Select Date</b></label>
                                    <input type="date" class="form-control " name="apply" />
                                    @error('apply')
                                    <font color="red">
                                        <b>
                                            {{ $message }}
                                        </b>
                                    </font>
                                    @enderror
                                </div>
                                <div class="col-sm-1" style="padding-top:8px;">
                                    <br />
                                    <button class="btn btn-danger">
                                        <i class="fa fa-search"></i> 
                                    </button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Today Visits 
                <a href="{{ route('add.visit') }}" class="ml-auto">
                    <button type="button" class="btn btn-danger">Add New Visit</button>
                </a>
                <button id="export_button" class="ml-3 btn btn-success">Export in excel</button>
            </div>
            <div class="card-body" id="employee_data">
                <table class="table table-striped" id="tableExport">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Visit Day</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    @foreach($visits as $visit)
                    <tbody>
                    <tr>
                        <td data-toggle="tooltip" data-placement="top"
                                            title="{{ $visit->details }}">{{ $visit->name }}</td>
                        <td  data-toggle="tooltip" data-placement="top"
                                            title="{{ $visit->email }}">{{ $visit->phone }}</td>
                        <td>{{ $visit->course->title }}</td>
                        <td>{{ $visit->created_at->diffForHumans(); }}</td>
                        <td>
                            <a href="{{ route('delete.visit',$visit->id) }}">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>    
    </div>
</div>
<script src="{{ asset('assets/js/app.min.js')}}"></script>
<script src="{{ asset('assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/page/datatables.js')}}"></script>
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function html_table_to_excel(type)
    {
        var data = document.getElementById('employee_data');

        var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

        XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

        XLSX.writeFile(file, 'visits.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
