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
                            <!-- <div class="col-md-8">
                                <h5 class="card-title float-left">List of Students</h5>
                                <button type="button" class="float-right" id="newstudent" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa fa-plus"></i> New Students</button>
                            </div> -->
                        </div>
                        <table id="example" class="table table-bordered table-striped display responsive nowrap" style="width:100%">
                            <thead id="column_name">
                                <tr>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">LRN Number</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Full Name</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Grade Level</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Section</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Action</th>

                                </tr>
                            </thead>
                            <tbody id="row_data">
                                @foreach($records as $record)
                                <tr>
                                    <td style="width: 15%">{{$record->lrn_number}}</td>
                                    <td style="width: 35%">{{$record->firstname}} {{$record->middlename}} {{$record->lastname}}</td>
                                    <td style="width: 10%">{{$record->grade_level}}</td>
                                    <td style="width: 5%">{{$record->section}}</td>
                                    <td style="width: 15%"></td>
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
    </div>
</div>
@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">Academic Record</a>
@endsection