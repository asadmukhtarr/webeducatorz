@extends('layouts.portal')
@section('title','Dashboar')
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
                    <h4>All Courses</h4>
                    <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="tableExport">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Badges</th>
                                <th>Category</th>
                                <th>Lectures</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            @foreach($courses as $course)
                            <tbody>
                              <tr>
                                <td class="align-middle">
                                  {{ $course->title }}
                                </td>
                                <td  class="align-middle">
                                  {{ $course->duration }}
                                </td>
                                <td  class="align-middle">
                                {{ $course->badges->count() }}
                                </td>
                                <th  class="align-middle">{{ $course->category->category }}</th>
                                <td  class="align-middle">{{ $course->noc }}</td>
                                <td>
                                  @if($course->status == 1)
                                    <div class="badge badge-success">
                                      Active
                                    </div>
                                  @else
                                      <div class="badge badge-danger">
                                        Drafts
                                      </div>
                                  @endif
                                </td>
                                <td>
                                  <a href="course/{{ $course->slug }}" class="btn btn-primary"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></a>
                                  <a href="{{ route('delete.course',$course->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

        XLSX.writeFile(file, 'Badges.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
