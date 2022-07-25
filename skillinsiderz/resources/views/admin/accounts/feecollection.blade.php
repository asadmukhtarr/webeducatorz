@extends('layouts.portal')
@section('title','Fee Collection')
@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
        <h4>Fees Details Of Every Enrollment</h4>
        <div class="card-header-action">
            @include('admin.accounts.menu')
        </div>
        </div>
        <div class="card-body" id="employee_data">
            <label for=""><b>Pending: <font color="red">{{ $pending }} PKR</font></b></label>   
         <label for=""><b>Paid: <font color="red">{{ $paid }} PKR</font></b></label>
        
        <table class="table table-striped" id="tableExport">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Due Balance</th>
                            <th>Pay</th>
                        </tr>
                    </thead>    
                    @foreach($fees as $fee)
                    <tbody>
                        <tr>
                            <td>
                                {{ $fee->student->name }}
                            </td>
                            <td>
                                {{ $fee->course->title }}
                            </td>
                            <td>
                                Rs {{ $fee->total_amount }}
                            </td>
                            <td>
                                Rs {{ $fee->paid }}
                            </td>
                            <td>
                                Rs {{ $fee->pending }}
                            </td>
                            <td>
                                <a href="{{ route('inst.detail', $fee->id) }}">
                                    <button class="btn btn-danger" type="button">Pay</button>
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

        XLSX.writeFile(file, 'feeDetails.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
@endsection
