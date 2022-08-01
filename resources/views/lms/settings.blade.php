@extends('layouts.dash')
@section('title', 'Skillinsiderz')
@section('content')

    <!-- ================================
            START DASHBOARD AREA
        ================================= -->
    <section class="dashboard-area">
        @include('layouts.sidbar')
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard
            </div>
            <div class="container-fluid">
                <div class="section-block mb-5"></div>
                <div class="tab-content">
                    <div class="tab-pane fade show active"
                        aria-labelledby="edit-profile-tab">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                            <form action="{{route('update_user', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="media media-card align-items-center">
                                    <div class="media-img media-img-lg mr-4 bg-gray">
                                        @if (!empty(Auth::user()->thumbnail))
                                            <img class="rounded-full"
                                                src="https://webeducatorz.com/storage/app/public/{{ Auth::user()->thumbnail }}"
                                                alt="Student thumbnail image">
                                        @else
                                            <img alt="image" src="{{ asset('public/img/demo.jpg') }}"
                                                class="rounded-full">
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <div class="file-upload-wrap file-upload-wrap-2">
                                            <input type="file" name="image"
                                                class="multi file-upload-input with-preview" multiple>
                                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a
                                                Photo</span>
                                        </div><!-- file-upload-wrap -->
                                        <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable
                                            files
                                            are .jpg & .png</p>
                                    </div>
                                </div><!-- end media -->
                                <div class="row pt-40px">
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">Name</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="name"
                                                value="{{Auth::user()->name}}">
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">Email Address</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="email" name="email"
                                                value="{{Auth::user()->email}}">
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">Phone Number</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="phone"
                                                value="{{Auth::user()->phone}}">
                                            <span class="la la-phone input-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">Password</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="password">
                                            <span class="la la-phone input-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-lg-12">
                                        <label class="label-text">Description</label>
                                        <div class="form-group">
                                            <textarea class="form-control form--control user-text-editor pl-3" name="description"></textarea>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-lg-12 py-2">
                                        <button type="submit" name="submit" class="btn theme-btn">Save Changes</button>
                                    </div><!-- end input-box -->
                                </div>
                            </form>
                        </div><!-- end setting-body -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                            <form method="post" class="row">
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Old Password</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="Old Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">New Password</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="New Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Confirm New Password</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="Confirm New Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12 py-2">
                                    <button class="btn theme-btn">Change Password</button>
                                </div><!-- end input-box -->
                            </form>
                            <form method="post" class="pt-5 mt-5 border-top border-top-gray">
                                <h3 class="fs-17 font-weight-semi-bold pb-1">Forgot Password then Recover Password</h3>
                                <p class="pb-4">Enter the email of your account to reset password. Then you will receive
                                    a link to email
                                    to reset the password. If you have any issue about reset password
                                    <a href="contact.html" class="text-color">contact us</a>
                                </p>
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="email" name="email"
                                            placeholder="Enter email address">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box py-2">
                                    <button class="btn theme-btn">Recover Password</button>
                                </div><!-- end input-box -->
                            </form>
                        </div><!-- end setting-body -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Change Email</h3>
                            <form method="post" class="row">
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Old Email</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="Old Email">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">New Email</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="New Email">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Confirm New Email</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            placeholder="Confirm New Email">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12 py-2">
                                    <button class="btn theme-btn">Change Email</button>
                                </div><!-- end input-box -->
                            </form>
                        </div><!-- end setting-body -->
                    </div><!-- end tab-pane -->
                </div><!-- end tab-content -->
                <div class="row align-items-center dashboard-copyright-content pb-4">
                    <div class="col-lg-6">
                        <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a
                                href="https://techydevs.com/">TechyDevs</a></p>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
            END DASHBOARD AREA
        ================================= -->


@endsection
