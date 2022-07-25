@extends('layouts.portal')
@section('content')
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
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
            <h4>Coming Up Events</h4>
            <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
          </div>
          <div class="card-body">
            <div class="clearfix mb-3"></div>
            <div class="table-responsive" id="employee_data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Timing</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($events as $event)
                <tbody>
                  <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->category->category }}</td>
                    <td>{{ $event->date }}</td>
                    <td> {{ date("g:i a", strtotime( $event->start)) }} - {{ date("g:i a", strtotime( $event->end)) }} </td>
                    <td>
                      {{ $event->amount }}
                    </td>
                    <td>
                        @if($event->date > today()->format('Y-m-d'))
                            <div class="crs_lt_101">
                                <span class="badge badge-warning">Coming Soon</span>
                            </div>
                        @elseif($event->date == today()->format('Y-m-d'))
                            <div class="crs_lt_101">
                                <span class="badge badge-success">Today</span>
                            </div>
                        @else
                          <div class="crs_lt_101">
                              <span class="badge badge-danger">Held</span>
                          </div>
                        @endif
                    </td>
                    <td>
                      <a href="{{ route('delete.event',$event->id) }}">
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
    </div>
  </div>
</section>
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

        XLSX.writeFile(file, 'Events.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection