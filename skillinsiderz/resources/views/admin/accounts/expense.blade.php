@extends('layouts.portal')
@section('title','Expense')
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
                <a href="{{ route('accounts.category') }}">
                    <button type="button" class="ml-auto btn btn-danger">Add Category</button>
                </a> 
            </label>
        </div>
        <div class="card-body" id="employee_data">
            <table class="table table-bordered" id="tableExport">
                <thead>
                    <tr class="table-danger">
                        <th>
                            Details
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <form action="{{ route('accounts.expensesave') }}" method="post">
                        @csrf
                            <td>
                                <input type="text" placeholder="Enter Details" class="form-control" name="details" value="">
                                <font color="red"> 
                                    <b> @error('details') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </td>
                            <td>
                                <select class="form-control selectric" name="expense">
                                    <option value=" ">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <font color="red"> 
                                    <b> @error('expense') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </td>
                            <td>
                                <input type="date" class="form-control" name="date" value="">
                                <font color="red"> 
                                    <b> @error('date') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="amount" value="">
                                <font color="red"> 
                                    <b> @error('amount') <span class="error">{{ $message }}</span> @enderror </b>
                                </font>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger"><b>+</b></button>
                            </td>
                        </form>
                    </tr>
               </tbody>
                @foreach($expenses as $expense)
                <tbody>
                    <tr>
                        <td>
                            {{ $expense->title }}
                        </td>
                        <td>
                            {{ $expense->expensecategory->name }}
                        </td>
                        <td>
                            {{ $expense->date }}
                        </td>
                        <td>
                            {{ $expense->amount }}
                        </td>
                        <td>
                            <a href="{{ route('accounts.expensedelete', $expense->id) }}">
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