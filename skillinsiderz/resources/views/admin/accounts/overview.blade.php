@extends('layouts.portal')
@section('title','Dashboar')
@section('content')
<div>
      <!-- Monthly details start -->
      <div class="card card-primary">
       <div class="card-header">
         <h4>{{  date('F') }} Details</h4>
        </div>
        <div class="card-body">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card" style="height: 135px;">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Receiving</h5>
                          <h2 class="mb-3 font-18">{{ $received }}</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="/assets/img/banner/7.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card" style="height: 135px;">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Expenses</h5>
                          <h2 class="mb-3 font-18">{{ $expense }}</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="/assets/img/banner/9.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card" style="height: 135px;">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Pending</h5>
                          <h2 class="mb-3 font-18">{{ $pending }}</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="/assets/img/banner/2.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card" style="height: 135px;">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Overall Chart</h5>
                          <h2 class="mb-3 font-18">$48,697</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="/assets/img/banner/24.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Monthly details End -->
    <!-- Overall Details start -->
    <div class="card card-primary">
      <div class="card-header ">
        <h4>Overall Details</h4>
      </div>
      <div class="card-body">
        <div class="row ">
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card" style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15">Received</h5>
                        <h2 class="mb-3 font-18"> {{$details->balance}} PKR </h2>
                        <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="/assets/img/banner/7.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card" style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15"> Pendding</h5>
                        <h2 class="mb-3 font-18"> {{$details->pending}} PKR </h2>
                        <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="/assets/img/banner/9.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card" style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15">Expenses</h5>
                        <h2 class="mb-3 font-18"> {{$details->expense}} PKR </h2>
                        <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                          <!-- Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="/assets/img/banner/2.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card" style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15">Chart</h5>
                        <h2 class="mb-3 font-18">$48,697</h2>
                        <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="/assets/img/banner/24.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Overall Details End -->

    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card ">
            <div class="card-header">
              <h4>Download Details</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('download.expense') }}" method="get">
                  @csrf
                  <table class="table table-bordered">
                    <tr class="table-danger">
                      <th colspan="3">Expense</th>
                    </tr>
                    <tr>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>
                        <input type="date" name="start" class="form-control">
                        <font color="red"> 
                            <b> @error('code') <span class="start">{{ $message }}</span> @enderror </b>
                        </font>
                      </td>
                      <td>
                        <input type="date" name="end" class="form-control">
                        <font color="red"> 
                            <b> @error('end') <span class="error">{{ $message }}</span> @enderror </b>
                        </font>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-danger">Download</button>
                      </td>
                    </tr>
                  </table>
                </form>
                <form action="{{ route('download.receivings') }}" method="get">
                  @csrf
                  <table class="table table-bordered">
                    <tr class="table-danger">
                      <th colspan="3">Recevings</th>
                    </tr>
                    <tr>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>
                        <input type="date" name="start" class="form-control">
                        <font color="red"> 
                            <b> @error('start') <span class="start">{{ $message }}</span> @enderror </b>
                        </font>
                      </td>
                      <td>
                        <input type="date" name="end" class="form-control">
                        <font color="red"> 
                            <b> @error('end') <span class="start">{{ $message }}</span> @enderror </b>
                        </font>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-danger">Download</button>
                      </td>
                    </tr>
                  </table>
                </form>
                <form action="{{ route('download.resave') }}" method="get">
                  @csrf
                  <table class="table table-bordered">
                    <tr class="table-danger">
                      <th colspan="3">Recevings & Expense</th>
                    </tr>
                    <tr>
                      <th>Select Month</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>
                        <input type="month" name="start" class="form-control">
                      </td>
                      <td>
                        <button type="submit" class="btn btn-danger">Download</button>
                      </td>
                    </tr>
                  </table>
                </form>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
          <!-- Support tickets -->
          <div class="card">
            <div class="card-header">
              <h4>Support Ticket</h4>
              <form class="card-header-form">
                <input type="text" name="search" class="form-control" placeholder="Search">
              </form>
            </div>
            <div class="card-body">
              <div class="support-ticket media pb-1 mb-3">
                <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">
                <div class="media-body ml-3">
                  <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                  <span class="font-weight-bold">#89754</span>
                  <a href="javascript:void(0)">Please add advance table</a>
                  <p class="my-1">Hi, can you please add new table for advan...</p>
                  <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                      Deo</span>
                    &nbsp;&nbsp; - 1 day ago</small>
                </div>
              </div>
              <div class="support-ticket media pb-1 mb-3">
                <img src="assets/img/users/user-2.png" class="user-img mr-2" alt="">
                <div class="media-body ml-3">
                  <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                  <span class="font-weight-bold">#57854</span>
                  <a href="javascript:void(0)">Select item not working</a>
                  <p class="my-1">please check select item in advance form not work...</p>
                  <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                      Smith</span>
                    &nbsp;&nbsp; - 2 day ago</small>
                </div>
              </div>
              <div class="support-ticket media pb-1 mb-3">
                <img src="assets/img/users/user-3.png" class="user-img mr-2" alt="">
                <div class="media-body ml-3">
                  <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                  <span class="font-weight-bold">#85784</span>
                  <a href="javascript:void(0)">Are you provide template in Angular?</a>
                  <p class="my-1">can you provide template in latest angular 8.</p>
                  <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>
                    &nbsp;&nbsp; -2 day ago</small>
                </div>
              </div>
              <div class="support-ticket media pb-1 mb-3">
                <img src="assets/img/users/user-6.png" class="user-img mr-2" alt="">
                <div class="media-body ml-3">
                  <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                  <span class="font-weight-bold">#25874</span>
                  <a href="javascript:void(0)">About template page load speed</a>
                  <p class="my-1">Hi, John, can you work on increase page speed of template...</p>
                  <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                      Basri</span>
                    &nbsp;&nbsp; -3 day ago</small>
                </div>
              </div>
            </div>
            <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
              All</a>
          </div>
          <!-- Support tickets -->
        </div>
        <div class="col-md-6 col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header">
              <h4>Projects Payments</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Client Name</th>
                      <th>Date</th>
                      <th>Payment Method</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John Doe </td>
                      <td>11-08-2018</td>
                      <td>NEFT</td>
                      <td>$258</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cara Stevens
                      </td>
                      <td>15-07-2018</td>
                      <td>PayPal</td>
                      <td>$125</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>
                        Airi Satou
                      </td>
                      <td>25-08-2018</td>
                      <td>RTGS</td>
                      <td>$287</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        Angelica Ramos
                      </td>
                      <td>01-05-2018</td>
                      <td>CASH</td>
                      <td>$170</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>
                        Ashton Cox
                      </td>
                      <td>18-04-2018</td>
                      <td>NEFT</td>
                      <td>$970</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>
                        John Deo
                      </td>
                      <td>22-11-2018</td>
                      <td>PayPal</td>
                      <td>$854</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>
                        Hasan Basri
                      </td>
                      <td>07-09-2018</td>
                      <td>Cash</td>
                      <td>$128</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
