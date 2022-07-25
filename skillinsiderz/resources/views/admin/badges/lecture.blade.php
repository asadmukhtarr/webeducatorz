@extends('layouts.portal')
@section('title','Badge')
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
                Expenses Details
                <a href="">
                    <button type="button" class="ml-auto btn btn-danger">Add lecture</button>
                </a>
                <button class="btn btn-success" id="export_button">Export in excel</button>
            </label>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="tableExport">
                <thead>
                    <tr class="table-danger">
                        <th>
                            Topic
                        </th>
                        <th>
                            Link
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <form action="{{ route('addlecture')}}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $badge->course_id }}">
                            <input type="hidden" name="badge_id" value="{{ $badge->id }}">
                            <input type="hidden" name="lecture" value="{{ $badge->lecture }}">

                            <td>
                                <font color="red"> 
                                    <b> @error('topic') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <input type="text" placeholder="Enter Topics" class="form-control" name="topic" value="">
                            </td>
                            <td>
                                <font color="red"> 
                                    <b> @error('link') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                                <input type="url" class="form-control" placeholder="Add Link" name="link" value="">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger"><b>+ Lectures</b></button>
                            </td>
                        </form>
                    </tr>
               </tbody>
               @foreach($lectures as $lecture)
                <tbody>
                    <tr>
                        <td>
                            {{ $lecture->title }}
                        </td>
                        <td>
                            {{ $lecture->lecture }}
                        </td>
                        <td>
                            <a href="{{ route('deletelecture',$lecture->id)}}">
                                <button type="button" class="btn btn-danger"><b><i class="fa fa-trash"></i><b></b> Delete</b></button>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
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

        XLSX.writeFile(file, 'expenses.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection