@extends('admin.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="wrapper">
                <h3>Academic Record / A.Y. 2022-2023</h3>
                </br>
                </br>
                <div class="card">
                    <div class="card-header">
                        <strong><i class="bx bx-data"></i>Student's Grade Data</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title float-left">List of Students</h5>
                                <!-- <button type="button" class="float-right" id="newstudent" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa fa-plus"></i> New Students</button> -->
                            </div>
                        </div>
                        <table class="table table-bordered table-striped ">
                            <thead id="column_name">
                                <tr>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Name</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">LRN Number</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Grade Level</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Section</th>

                                </tr>
                            </thead>
                            <tbody id="row_data">
                                <tr>
                                    <td style="width: 45%"></td>
                                    <td style="width: 25%"></td>
                                    <td style="width: 15%"></td>
                                    <td style="width: 15%"></td>
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
@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">Academic Record</a>
@endsection