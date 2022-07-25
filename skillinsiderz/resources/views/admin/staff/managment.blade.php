@extends('layouts.portal')
@section('title','Managment')
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
              <div class="card-header">
                <h4>Designations</h4>
                <a href="{{ route('create.staff') }}"><button class="btn btn-danger ml-auto">Add Staff</button></a>
                <button class="btn btn-success ml-3" id="export_button">Export in excel</button>
              </div>
              <div class="card-body">
                    <div class="table-responsive" id="employee_data">
                      <table class="table table-striped" id="tableExport">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            @foreach($staffs as $staff)
                              <tbody>
                                <tr>
                                      <td>{{ $staff->name }}</td>
                                      <td>{{ $staff->designation->name }}</td>
                                      <td>{{ $staff->email }}</td>
                                      <td>{{ $staff->phone }}</td>
                                      <td>
                                        @if($staff->status == 1)
                                          <span class="badge badge-success">Active</span>
                                        @elseif($staff->status == 2)
                                          <span class="badge badge-danger">Left</span>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="{{ route('edit.staff', $staff->id) }}">
                                          <button class="btn btn-danger"><i class="fa fa-edit"></i></button>
                                        </ad>
                                      </td>
                                </tr>
                              </tbody>
                            @endforeach
                      </table>
                    </div>
              </div>
            </div>
       </div>
</div>

<script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
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

        XLSX.writeFile(file, 'managment.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
