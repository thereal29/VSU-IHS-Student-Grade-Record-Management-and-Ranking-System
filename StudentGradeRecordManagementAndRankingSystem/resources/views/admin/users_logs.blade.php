@extends('admin.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="wrapper">
                    <h3>System User Logs / A.Y. 2022-2023</h3>
                    </br>
                    </br>
                    <div class="card">
                        <div class="card-header">
                            <strong><i class="bx bx-data"></i>List of System Logs</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- <div class="col-md-8">
                                    <h5 class="card-title float-left">List of Reports</h5>
                                    <button type="button" class="float-right" id="newstudent" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa fa-plus"></i> New Students</button>
                                </div> -->
                            </div>
                            <table class="table table-bordered table-striped ">
                                <thead id="column_name">
                                    <tr>
                                        <th style="font-size:14px; font-weight:bold; text-align:center;">Log ID</th>
                                        <th style="font-size:14px; font-weight:bold; text-align:center;">Name</th>
                                        <th style="font-size:14px; font-weight:bold; text-align:center;">Activity</th>
                                        <th style="font-size:14px; font-weight:bold; text-align:center;">Date & Time</th>
                                        <th style="font-size:14px; font-weight:bold; text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="row_data">
                                    <tr>
                                        <td style="width: 10%"></td>
                                        <td style="width: 30%"></td>
                                        <td style="width: 20%"></td>
                                        <td style="width: 20%"></td>
                                        <td style="width: 20%"></td>
                                        <!-- <td class="action" style="width: 20%">
                                        <button type="button" class="" id="viewprofile" data-bs-toggle="modal" data-bs-target=""> View Profile</button>
                                        </td>     -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">Activity Logs</a>
@endsection