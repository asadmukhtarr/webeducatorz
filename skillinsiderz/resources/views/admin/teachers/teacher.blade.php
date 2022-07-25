@extends('layouts.portal')
@section('title','Teacher')
@section('content')
<div class="container">
    <section class="section">
        <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card author-box">
                <img alt="image" src="{{asset($teacher->picture)}}" class="">
                <div class="card-body">
                <div class="author-box-center">
                    
                    <div class="clearfix"></div>
                    <div class="author-box-name">
                    <a href="#">{{ $teacher->name }}</a>
                    </div>
                    <div class="author-box-job">
                        {{ $teacher->category->category }}
                    </div>
                </div>
                <div class="text-center">
                    <div class="author-box-description">
                        <p>
                        {{ $teacher->category->description }}
                        </p>
                    </div>
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
                        Phone
                    </span>
                    <span class="float-right text-muted">
                        {{ $teacher->phone }}
                    </span>
                    </p>
                    <p class="clearfix">
                    <span class="float-left">
                        Alternative Phone
                    </span>
                    <span class="float-right text-muted">
                        {{ $teacher->phone2 }}
                    </span>
                    </p>
                    <p class="clearfix">
                    <span class="float-left">
                        Mail
                    </span>
                    <span class="float-right text-muted">
                        {{ $teacher->email }}
                    </span>
                    </p>
                    <p class="clearfix">
                    <span class="float-left">
                        Address
                    </span>
                    
                    </p>
                    <p class="clearfix">
                        {{ $teacher->address }}
                    </p>
                    <p class="clearfix">
                    <span class="float-left">
                        Edit
                    </span>
                    <span class="float-right text-muted">
                        <a href="{{ route('edit.teacher', $teacher->id) }}">
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> Edit</button>
                        </a>    
                    </span>
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4>Documents</h4>
                </div>
                <div class="card-body">
                <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                            MOU
                        </span>
                        <span class="float-right text-muted">
                            <a href="{{asset($teacher->mou)}}" target="_blank"><button type="button" class="btn btn-danger btn-sm">Download</button></a>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                            CV
                        </span>
                        <span class="float-right text-muted">
                            <a href="{{asset($teacher->document)}}" target="_blank" ><button type="button" class="btn btn-danger btn-sm">Download</button></a>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                            CNIC
                        </span>
                        <span class="float-right text-muted">
                            <a href="{{asset($teacher->cnic_i)}}" target="_blank"><button type="button" class="btn btn-danger btn-sm">Download</button></a>
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
                        aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                        aria-selected="false">Badges</a>
                    </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <p class="m-t-30">
                            {!! $teacher->description !!}
                        </p>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                    <div class="table-responsive">
                      <table class="table table-striped">
                            <tr>
                              <th>Badge Code</th>
                              <th>Course Name</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Status</th>
                            </tr>
                            @foreach($teacher->badge as $badge)
                              <tr>
                                    <td>{{ $badge->code }}</td>
                                    <td class="align-middle">
                                        {{ $badge->course->title }}
                                    </td>
                                    <td>
                                      6 Months
                                    </td>
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
        </div>
    </section>
</div>
@endsection
