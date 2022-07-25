@extends('layouts.portal')
@section('title','Dashboar')
@section('content')
<div>
    <!-- Today activities start -->
    <div class="card card-primary">
      <div class="card-header ">
        <h4>Today Activities</h4>
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
                        <h5 class="font-15">Visists</h5>
                        <h2 class="mb-3 font-18">{{ $today_visits }}</h2>
                        <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/9.jpg" alt="">
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
                        <h5 class="font-15"> Enrollments</h5>
                        <h2 class="mb-3 font-18">{{$today_enrollments}}</h2>
                        <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/32.png" alt="">
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
                        <h5 class="font-15">Workshops</h5>
                        <h2 class="mb-3 font-18"> {{$today_workshops}} </h2>
                        <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                          <!-- Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/33.png" alt="">
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
                        <h5 class="font-15">Details</h5>
                        <h2 class="mb-3 font-18">12,11</h2>
                        <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/29.png" alt="">
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
    <!-- Today activities End -->

    <!-- Current Month calculation start -->
    <div class="card card-primary">
      <div class="card-header ">
        <h4>Current Month Calcutations</h4>
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
                        <h5 class="font-15">New enrollments</h5>
                        <h2 class="mb-3 font-18"> {{$new_enrollments}} </h2>
                        <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/7.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card"  style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15"> New Badges</h5>
                        <h2 class="mb-3 font-18"> {{$new_badges}} </h2>
                        <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/17.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card"  style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15">New Workshops</h5>
                        <h2 class="mb-3 font-18"> {{$new_workshops}} </h2>
                        <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                          <!-- Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/9.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card"  style="height: 135px;">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15">Our Total Charts</h5>
                        <h2 class="mb-3 font-18">$48,697</h2>
                        <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/30.png" alt="">
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
    <!-- Current Month calculation End -->

    <!-- About Students start -->
    <div class="card card-primary">
      <div class="card-header ">
        <h4>All Details</h4>
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
                        <h5 class="font-15">Students</h5>
                        <h2 class="mb-3 font-18">{{ $students }}</h2>
                 
                    </div>  
                    </div>
                    <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="banner-img">
                          <img src="assets/img/banner/6.png" alt="">
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
                        <h5 class="font-15">Courses</h5>
                        <h2 class="mb-3 font-18">{{ $courses }}</h2>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/20.png" alt="">
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
                        <h5 class="font-15">Badges</h5>
                        <h2 class="mb-3 font-18">{{ $badges }}</h2>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/3.jpg" alt="">
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
                        <h5 class="font-15">Workshops</h5>
                        <h2 class="mb-3 font-18">{{ $workshops }}</h2>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/1.jpg" alt="">
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
    <!-- About Students End -->
    
    <!-- Overall Details start -->
    <div class="card card-primary">
      <div class="card-header ">
        <h4>Staff Details</h4>
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
                        <h5 class="font-15">Students</h5>
                        <h2 class="mb-3 font-18"> {{$students}} </h2>
                        <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/26.png" alt="">
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
                        <h5 class="font-15"> Teachers</h5>
                        <h2 class="mb-3 font-18">{{$trainer}}</h2>
                        <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/31.png" alt="">
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
                        <h5 class="font-15">Staff</h5>
                        <h2 class="mb-3 font-18"> {{$staff}} </h2>
                        <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                          <!-- Increase</p> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="assets/img/banner/25.png" alt="">
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
                        <img src="assets/img/banner/24.png" alt="">
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
        <div class="col-md-6 col-lg-12 col-xl-6">
          <!-- Support tickets -->
          <div class="card">
            <div class="card-header">
              <h4>Workshops Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category</th>
                      <th>Date</th>
                      <th>Start</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  @foreach($workshops_list as $item)
                  <tbody>
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->category->category}}</td>
                      <td>{{$item->date}}</td>
                      <td>{{$item->start}}</td>
                      <td><div class="badge badge-pill badge-success mb-1">Description</div></td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
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
              <h4>Badges Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Badge Name</th>
                      <th>Starting at</th>
                      <th>Instructor</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  @foreach($badges_list as $data)
                  <tbody>
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->code}}</td>
                      <td>{{$data->start}}</td>
                      <td>{{$data->assigntrainer->trainer->name}}</td>
                      <td>@if($data->status==0)
                        Inactive
                        @else
                        Active
                      @endif</td>
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
@endsection
