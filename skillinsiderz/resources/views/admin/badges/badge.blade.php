@extends('layouts.portal')
@section('title','Badge')
@section('content')
<div>
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
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h4>Badge Details</h4>
            <span class="float-right text-muted">
                @if($badge->status == 0)
                    <div class="badge badge-warning bagde-sm">
                        New Badge
                    </div>
                @elseif($badge->status == 1)
                    <div class="badge badge-danger bagde-sm">
                        Started
                    </div>
                @else
                    <div class="badge badge-success bagde-sm">
                        Started
                    </div>
                @endif 
            </span>
          </div>
          <div class="card-body">
            <div class="py-4">
              <p class="clearfix">
                <span class="float-left">
                  Course Name
                </span>
                <span class="float-right text-muted">
                  {{ $badge->course->title }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Badge Code
                </span>
                <span class="float-right text-muted">
                      {{ $badge->code }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Start Date
                </span>
                <span class="float-right text-muted">
                  {{  $badge->start }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                    End Date
                </span>
                <span class="float-right text-muted">
                      {{  $badge->end }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                    Trainer
                </span>
                <span class="float-right text-muted">
                      {{  $badge->assigntrainer->trainer->name }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                    Bagde Fee
                </span>
                <span class="float-right text-muted">
                      Rs {{  $badge->fee }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Edit Badge
                </span>
                <span class="float-right text-muted">
                    <a href="{{ route('edit.badge', $badge->id) }}">
                      <button type="button" class="btn btn-success"> <i class="fa fa-edit"></i> Edit </button>
                    </a>
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Lectures
                </span>
                <span class="float-right text-muted">
                    <a href="{{ route('lecture', $badge->id) }}">
                      <button type="button" class="btn btn-danger"> <i class="fa fa-plus"></i> Lectures </button>
                    </a>
                </span>
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Badge Schedule</h4>
          </div>
          <div class="card-body">
            <div class="py-4">
              <p class="clearfix">
                <span class="float-left">
                  Class Timing
                </span>
                <span class="float-right text-muted">
                    {{  date("g:i a", strtotime( $badge->slot->start)) }} -  {{  date("g:i a", strtotime( $badge->slot->end)) }}
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Room #
                </span>
                <span class="float-right text-muted">
                  {{ $badge->room->room }}
                </span>
              </p>
              
              <p class="clearfix">
                <span class="float-left">
                  Number of lecture
                </span>
                <span class="float-right text-muted">
                  {{ $badge->course->noc }} Lectures
                </span>
              </p>
              <p class="clearfix">
                <span class="float-left">
                  Classes in a week
                </span>
                <span class="float-right text-muted">
                  {{ $badge->course->schedual }} Classes
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
                  aria-selected="true">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                  aria-selected="false">Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#lectures" role="tab"
                  aria-selected="false">Lectures</a>
              </li>
            </ul>
            <div class="tab-content tab-bordered" id="myTab3Content">
              <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                  <table class="table table-bordered">
                    <tr>
                      <th>Student ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                    @foreach($enrolments as $enrolment)
                    <tr>
                      <td>{{ $enrolment->stuid }}</td>
                      <td>{{ $enrolment->student->name }}</td>
                      <td>{{ $enrolment->student->phone }}</td>
                      <td>
                          <a href="{{ route('student',$enrolment->student->id) }}">
                            <button type="button" class="btn btn-danger">Check</button>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
              <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                    {!! $badge->description !!}
              </div>
              <div class="tab-pane fade" id="lectures" role="tabpanel" aria-labelledby="profile-tab3">
                @foreach($badge->lectures as $lecture)
                  <div id="accordion">
                    <div class="accordion">
                      <div class="accordion-header" role="button" data-toggle="collapse" data-target="#lec{{ $lecture->id }}"
                        aria-expanded="true">
                        <h4>{{ $lecture->title }}</h4>
                      </div>
                      <div class="accordion-body collapse" id="lec{{ $lecture->id }}" data-parent="#accordion">
                        <p class="mb-0">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $lecture->lecture }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </p>
                      </div>
                    </div>
                  </div>
                @endforeach
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
