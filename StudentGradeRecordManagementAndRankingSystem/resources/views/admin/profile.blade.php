@extends('admin.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row profile-wrapper">
            <div class="col-md-4">
                <div class="card text-center">
                            <img src="../assets/img/mike.jpg" id="photo"alt="">
                            <!-- <input type="file" name="file" id="file"></input>
                            <label class="bx bx-camera" for="file" id="upload-btn"></label> -->
                        
                            <p class="id-number">{{ Auth::user()->getAdmin->university_number }}</p>
                            <h4 class="student-name">{{ Auth::user()->getAdmin->firstname . ' ' . Auth::user()->getAdmin->lastname }}</h4>
                            <h6 class="student-course">System Administrator</h6>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="info-header">
                        <i class="bx bx-user"></i>
                        &nbsp;User Details
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="data font-weight-bold">Name</div>
                            <h6 class="text-muted">{{ Auth::user()->getAdmin->firstname . ' ' . Auth::user()->getAdmin->middlename . ' ' . Auth::user()->getAdmin->lastname }}</h6>
                        </div>

                        <div class="col-sm-6">
                            <div class="data font-weight-bold">University Number</div>
                            <h6 class="text-muted">{{ Auth::user()->getAdmin->university_number }}</h6>
                        </div>
                        <div class="col-sm-6">
                            <div class="data font-weight-bold">Username</div>
                            <h6 class="text-muted">{{ Auth::user()->username }}</h6>
                        </div>
                        <div class="col-sm-6">
                            <div class="data font-weight-bold">Contact Number</div>
                            <h6 class="text-muted">{{ Auth::user()->getAdmin->phone_number }}</h6>
                        </div>
                        <div class="col-sm-12">
                            <div class="data font-weight-bold">Email Address</div>
                            <h6 class="text-muted">{{ Auth::user()->email }}</h6>
                        </div>
                        <div class="col-sm-12">
                            <div class="data font-weight-bold">Home Address</div>
                            <h6 class="text-muted">{{ Auth::user()->getAdmin->home_address }}</h6>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">Profile</a>
@endsection