@extends('layouts.portal')
@section('title','All Badges')
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
                    <h4>All Badges</h4>
                    <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive" id="employee_data" >
                      <table class="table table-striped" id="tableExport">
                            <thead>
                              <tr>
                                <th>Badge Code</th>
                                <th>Course Name</th>
                                <th>Students</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            @foreach($badges as $badge)
                              <tbody>
                                <tr>
                                      <td>{{ $badge->code }}</td>
                                      <td class="align-middle">
                                          {{ $badge->course->title }}
                                      </td>
                                      <td>
                                          {{ $badge->student->count() }}
                                      </td>
                                      <td>{{ $badge->start }}</td>
                                      <td>{{ $badge->start }}</td>
                                      <td>
                                        @if($badge->status == 0)
                                        <div class="badge badge-warning">Active</div>
                                        @elseif($badge->status == 1)
                                        <div class="badge badge-danger">Started</div>
                                        @else
                                          <div class="badge badge-success">Completed</div>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="{{ route('badge',$badge->id) }}" class="btn btn-primary"><i class="fa fa-mouse-pointer"></i></a>
                                        <a href="{{ route('badge',$badge->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

        XLSX.writeFile(file, 'Badges.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection