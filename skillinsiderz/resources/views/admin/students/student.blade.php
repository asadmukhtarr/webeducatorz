@extends('layouts.portal')
@section('title','Student')
@section('content')
<section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#">{{ $student->name }}</a>
                      </div>
                      <div class="author-box-job">Web Developer</div>
                    </div>
                    
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                          {{ $student->dob }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          CNIC
                        </span>
                        <span class="float-right text-muted">
                         {{ $student->cnic }}
                        </span>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                         {{ $student->phone }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                           {{ $student->email }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Guardian Contact
                        </span>
                        <span class="float-right text-muted">
                           {{ $student->guardian_contact }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Gender
                        </span>
                        <span class="float-right text-muted">
                           {{ ucfirst($student->gender) }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Religious
                        </span>
                        <span class="float-right text-muted">
                           {{ ucfirst($student->religious) }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                              Reference
                        </span>
                        <span class="float-right text-muted">
                           {{ ucfirst($student->reference) }} 
                        </span>
                     </p>
                      <p class="clearfix">
                        <span class="float-left">
                           Last Degree
                        </span> <br />
                        <span class="text-muted">
                           {{ $student->degree }} , {{ $student->institute }} , {{ $student->year }}
                        </span>
                     </p>
                     
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Address</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                     <span class="float-left">
                        Address
                     </span> <br />
                     <span class="text-muted">
                        {{ $student->address }}
                     </span>
                     </p>
                     <p class="clearfix">
                        <span class="float-left">
                           City
                        </span> 
                        <span class="float-right text-muted">
                           {{ $student->city }}
                        </span>
                     </p>
                     <p class="clearfix">
                        <span class="float-left">
                           State
                        </span>
                        <span class="float-right text-muted">
                           {{ $student->state }}
                        </span>
                     </p>
                     <p class="clearfix">
                        <span class="float-left">
                           Country
                        </span>
                        <span class="float-right text-muted">
                           {{ $student->country }}
                        </span>
                     </p>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">Enrolled Courses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Fee Schedule</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                           <table class="table table-bordered">
                              <tr>
                                 <th>Badge</th>
                                 <th>Duration</th>
                                 <th>Started at</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                              @foreach($student->enrollment as $enrollment)
                                 <tr>
                                    <td>{{ $enrollment->badge->code }}</td>
                                    <td>{{ $enrollment->course->duration }}</td>
                                    <td>{{ $enrollment->badge->start }}</td>
                                    <td>{{ ucfirst($enrollment->status) }}</td>
                                    <td>
                                      @if($enrollment->status == "active")
                                      <a href="{{ route('freeze.student', $enrollment->id) }}">
                                        <button type="button" class="btn btn-warning">Freeze</button>
                                      </a>
                                      <a href="{{ route('cancel.student', $enrollment->id) }}">
                                        <button type="button" class="btn btn-danger">Cancelled</button>
                                      </a>  
                                      @endif
                                      @if($enrollment->status == "freeze" || $enrollment->status == "cancelled" || $enrollment->status == "pending" )
                                        <a href="{{ route('active.student', $enrollment->id) }}">
                                            <button type="button" class="btn btn-success">Active</button>
                                        </a>
                                      @endif
                                      
                                    </td>
                                 </tr>
                              @endforeach
                           </table>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                      @foreach($student->fee as $fee)
                          @if($fee->enrollment->status == "pending" || $fee->enrollment->status == "active" )
                              <table class="table table-hover">
                                  <tr style="background-color:red;">
                                    <td colspan="6">
                                        {{ $fee->course->title }}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Regular Fee</th>
                                    <th>Admission Fee</th>
                                    <th>Total Amount</th>
                                    <th>Paid</th>
                                    <th>Pending</th>
                                    <th>Action</th>
                                  </tr>
                                  <tr>
                                    <td>{{ $fee->regular_fee }}</td>
                                    <td>{{ $fee->admission_fee }}</td>
                                    <td>{{ $fee->total_amount }}</td>
                                    <td>{{ $fee->paid }}</td>
                                    <td>{{ $fee->pending }}</td>
                                    <th>
                                        <a href="{{ route('inst.detail', $fee->id) }}">
                                          <button type="button" class="btn btn-danger">Pay</button>
                                        </a>
                                    </th>
                                  </tr>
                              </table>
                          @endif    
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
