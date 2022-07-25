@extends('layouts.portal')
@section('title','Teachers')
@section('content')
-<div>
    <div class="container">
        @if (session()->has('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
        @endif
        <div class="card">
        <div class="card-header">
          <h4>Teachers</h4>
          <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="tableExport">
              <thead>
                <tr>
                  <th>Picture</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Joining Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($trainers as $trainer)
              <tbody>
                <tr>
                  <td>
                    <img alt="image" src="https://management.infinitetechnologyinstitute.com/public/{{asset($trainer->picture)}}" class="rounded-circle" width="35"
                      data-toggle="tooltip" title="Wildan Ahdian">
                  </td>
                  <td>{{ $trainer->name }}</td>
                  <td class="align-middle">
                    {{ $trainer->email }}
                  </td>
                  <td>{{ $trainer->phone }}</td>
                  <td>{{ Carbon\Carbon::parse($trainer->created_at)->diffForHumans() }}</td>
                  <td>
                    @if($trainer->status == 0)
                      <div class="badge badge-success">Active</div>
                    @else 
                      <div class="badge badge-danger">left</div>
                    @endif  
                  </td>
                  <td>
                    <a href="{{ route('show.teacher', $trainer->id) }}" class="btn btn-primary"><i class="fa fa-mouse-pointer"></i></a>
                    <a href="{{ route('delete.teacher', $trainer->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

        XLSX.writeFile(file, 'Teachers.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
