@extends('layouts.portal')
@section('title','Dashboar')
@section('content')
<div>
    <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <img alt="image" src="https://management.infinitetechnologyinstitute.com/public/{{ $course->thumbnail}}" >
                  <div class="card-body">
                    <div class="author-box-center">
                      
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#">{{ $course->title }}</a>
                      </div>
                      <div class="author-box-job">{{ $course->category->category }}</div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                          {{ $course->category->description }}
                        </p>
                      </div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Course Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Course
                        </span>
                        <span class="float-right text-muted">
                          {{ $course->code }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Duration
                        </span>
                        <span class="float-right text-muted">
                          {{ $course->duration }}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Number Of Lectures
                        </span>
                        <span class="float-right text-muted">
                          {{ $course->noc }} Lectures
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Classes In A Week
                        </span>
                        <span class="float-right text-muted">
                          {{ $course->schedual }} Lectures
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Outline
                        </span>
                        <span class="float-right text-muted">
                          <a href="https://management.infinitetechnologyinstitute.com/public/storage/public/{{ $course->outline }}" target="_blank" class="btn btn-danger btn-sm">Download</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Any Update
                        </span>
                        <span class="float-right text-muted">
                          <a href="{{ route('edit.training',$course->slug) }}">
                            <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Click Here</button>
                          </a>
                        </span>
                      </p>
                    
                    </div>
                  </div>
                </div>
                @if(!empty($course->video))
                  <div class="card">
                    <div class="card-header">
                      <h4>Skills</h4>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Java</div>
                          </div>
                          <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-primary" data-width="70%"></div>
                            </div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Web Design</div>
                          </div>
                          <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-warning" data-width="80%"></div>
                            </div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Photoshop</div>
                          </div>
                          <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-green" data-width="48%"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                @endif
                <div class="card">
                  <div class="card-header">
                    <h4>Course Fee</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Regular Fee
                        </span>
                        <span class="float-right text-muted">
                          <b> Rs. {{ $course->regular_fee }} </b>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Discount
                        </span>
                        <span class="float-right text-muted">
                          <b> {{ $course->discount }}% </b>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Discounted Fee
                        </span>
                        <span class="float-right text-muted">
                          <b> Rs {{ $course->fee }} </b>
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
                          aria-selected="true">About Course</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Badges</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <p class="m-t-30">
                          {!! $course->description !!}
                        </p>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                          <table class="table table-striped">
                                <tr>
                                  <th>Badge Code</th>
                                  <th>Students</th>
                                  <th>Start Date</th>
                                  <th>End Date</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                                @foreach($course->badges as $badge)
                                  <tr>
                                        <td>{{ $badge->code }}</td>
                                        <td>
                                          6 Months
                                        </td>
                                        <td>{{ $badge->start }}</td>
                                        <td>{{ $badge->start }}</td>
                                        <td>
                                          @if($badge->status == 0)
                                          <div class="badge badge-success">Active</div>
                                          @elseif($badge->status == 1)
                                          <div class="badge badge-info">Started</div>
                                          @else
                                          <div class="badge badge-danger">Completed</div>
                                          @endif
                                        </td>
                                        <td><a href="{{ route('badge',$badge->id) }}" class="btn btn-primary">Detail</a></td>
                                  </tr>
                                @endforeach
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
@endsection
