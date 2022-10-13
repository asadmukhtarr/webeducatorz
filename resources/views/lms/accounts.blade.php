@extends('layouts.newlms.app')
@section('title','Accounts')
@section('content')
<div class="row">
		<div class="col-xl-12">
			<!-- Quick stats boxes -->
			<div class="row">
				<div class="col-lg-4">
					<!-- Members online -->
					<div class="card bg-teal text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{$balance}} PKR</h3>
							</div>
							
							<div>
								Balance
								<div class="font-size-sm opacity-75">Your Pending Fee</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="members-online"></div>
						</div>
					</div>
					<!-- /members online -->
				</div>
				<div class="col-lg-4">
					<!-- Current server load -->
					<div class="card bg-pink text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $paid }} PKR</h3>
							</div>
							
							<div>
								Active Coures
								<div class="font-size-sm opacity-75">Your Paid Fee</div>
							</div>
						</div>

						<div id="server-load"></div>
					</div>
					<!-- /current server load -->

				</div>
				<div class="col-lg-4">

					<!-- Today's revenue -->
					<div class="card bg-primary text-white">
						<div class="card-body">
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $total }} PKR</h3>
							</div>
							<div>
								Total 
								<div class="font-size-sm opacity-75">Your Total Fee</div>
							</div>
						</div>

						<div id="today-revenue"></div>
					</div>
					<!-- /today's revenue -->

				</div>
			</div>
			<!-- /quick stats boxes -->
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
        <table class="table table-bordered">
						<tr style="background:#26A69A; color:white;">
							<th>Course</th>
							<th>Batch</th>
							<th>Total</th>
							<th>Paid</th>
							<th>Pending</th>
						</tr>
						@foreach($fees as $fee)
						<tr>
							<td>{{ $fee->course->title }}</td>
							<td>{{ $fee->badge->code }}</td>
							<td>{{ $fee->total_amount }} PKR</td>
							<td>{{ $fee->paid }} PKR</td>
							<td>
								<font color="red">
									<b>
										{{ $fee->pending }} PKR
									</b>
								</font>
							</td>
						</tr>
                        <tr>
                            <th colspan="5" style="background:#26A69A; color:white;">
                                Installments Detail
                            </th>
                        </tr>
                        <tr style="background:#F35C86; color:white;">
                            <th colspan="2">Installment</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        @foreach(App\Models\instalment::where('fee_id',$fee->id)->get() as $intallment)
                        <tr>
                            <td colspan="2">{{ ucfirst($intallment->type) }} {{ $intallment->instalment_no }}</td>
                            <td>{{ ucfirst($intallment->amount) }} PKR</td>
                            <td>
                                <span class="badge badge-danger">
                                    {{ ucfirst($intallment->status) }}
                                </span>
                            </td>
                            <td>{{ ucfirst($intallment->last_day) }}</td>
                        </tr>
                        @endforeach
						@endforeach
					</table>
		</div>
	</div>
@endsection