@extends('admin.navigation')
@section('content')

<div class="wrapper">
    <h3>System User Accounts / A.Y. 2022-2023</h3>
    </br>
    </br>
    <div class="card">
        <div class="card-header">
            <strong><i class="bx bx-data"></i>List of System Users</strong>
        </div>
        <div class="card-body col-md-12">
            <div class="row">
                <!-- <div class="col-md-8">
                    <h5 class="card-title float-left">List of Reports</h5>
                    <button type="button" class="float-right" id="newstudent" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa fa-plus"></i> New Students</button>
                </div> -->
            </div>
            <table id="example" class="table table-bordered table-striped display responsive nowrap" style="width:100%">
                <thead id="column_name">
                    <tr>
                        <th style="font-size:14px; font-weight:bold; text-align:center;">User Number</th>
                        <th style="font-size:14px; font-weight:bold; text-align:center;">Name</th>
                        <th style="font-size:14px; font-weight:bold; text-align:center;">Username</th>
                        <th style="font-size:14px; font-weight:bold; text-align:center;">Email Address</th>
                        <th style="font-size:14px; font-weight:bold; text-align:center;">Actions</th>
                    </tr>
                </thead>
                <tbody id="row_data">
                    @foreach ($users as $user)
                    <tr>
                        <td style="width: 5%">{{$user->id}}</td>
                        <td style="width: 30%">{{$user->username}}</td>
                        <td style="width: 15%">{{$user->username}}</td>
                        <td style="width: 30%">{{$user->username}}</td>
                        <td style="width: 10%">{{$user->username}}</td>
                        <!-- <td class="action" style="width: 20%">
                        <button type="button" class="" id="viewprofile" data-bs-toggle="modal" data-bs-target=""> View Profile</button>
                        </td>     -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">User List</a>
@endsection