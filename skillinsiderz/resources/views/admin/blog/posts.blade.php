@extends('layouts.portal')
@section('content')
<section class="section">
          <div class="section-body">
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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                    <button class="btn btn-success ml-auto" id="export_button">Export in excel</button>
                  </div>
                  <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    @if(Session::has('message'))
                      <div class="alert alert-primary">{{ Session::get('message') }}</div>
                    @endif
                    <div class="table-responsive" id="employee_data">
                      <table class="table table-striped" id="tableExport">
                        <thead>
                        <tr>
                          <th>Author</th>
                          <th>Category</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                          <td>
                            <a href="#">
                              <img alt="image" src="{{ asset('content/'.$blog->thumbnail) }}" class="rounded-circle" width="35"
                                data-toggle="title" title="">
                              <span class="d-inline-block ml-1">{{ $blog->title }}</span>
                            </a>
                          </td>
                          <td>{{ $blog->category->category }}</td>
                          <td>{{ $blog->created_at->diffForHumans() }}</td>
                          <td>
                            <a href="{{ route('del.posts',$blog->id) }}"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                            <a href="{{ route('edit.posts',$blog->id) }}"><button class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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

        XLSX.writeFile(file, 'Posts.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection