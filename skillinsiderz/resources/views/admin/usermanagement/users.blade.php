@extends('layouts.portal')
@section('title','Users')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <i class="fa fa-users"></i> All Users
            <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
        </div>
        <div class="card-body" id="employee_data">
            <table class="table table-hovered" id="tableExport">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
            @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{ ucfirst($user->user->name) }}</td>
                    <td>{{ $user->user->email }}</td>
                    <td>{{ $user->user->phone }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <button type="button"></button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>  
        </div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
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

        XLSX.writeFile(file, 'users.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
