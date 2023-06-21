@extends('admin.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="wrapper">
                <h3>Subjects to be taken / A.Y. 2022-2023</h3>
                </br>
                </br>
                <div class="card">
                    <div class="card-header">
                        <form action="" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><i class="bx bx-data"></i>List of Curriculum</strong>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" style="float:left; background:#05300e; color:#fff;">Add New Curriculum</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row d-flex">
                                <div class="col-md-3 m-0">
                                    <strong>By Grade Level:</strong>
                                </div>
                                <div class="col-md-9">
                                    <select name="gradelevel" id="gradelevel" class="form-select d-flex">
                                        <option value="">Show all Curriculum</option>
                                        <option value="Grade 7" {{Request::get('gradelevel') == 'Grade 7' ? 'selected' : ''}}> Grade 7</option>
                                        <option value="Grade 8" {{Request::get('gradelevel') == 'Grade 8' ? 'selected' : ''}}> Grade 8</option>
                                        <option value="Grade 9" {{Request::get('gradelevel') == 'Grade 9' ? 'selected' : ''}}> Grade 9</option>
                                        <option value="Grade 10" {{Request::get('gradelevel') == 'Grade 10' ? 'selected' : ''}}> Grade 10</option>
                                        <option value="Grade 11" {{Request::get('gradelevel') == 'Grade 11' ? 'selected' : ''}}> Grade 11</option>
                                        <option value="Grade 12" {{Request::get('gradelevel') == 'Grade 12' ? 'selected' : ''}}> Grade 12</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary" style="float:right; background:#05300e; color:#fff;">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
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
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Subject ID</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Course Description</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Students Enrolled</th>
                                    <th style="font-size:14px; font-weight:bold; text-align:center;">Action</th>

                                </tr>
                            </thead>
                            <tbody id="row_data">
                                @foreach ($subjects as $subject)
                                <tr>
                                    <td style="width: 15%">{{$subject->id}}</td>
                                    <td style="width: 35%">{{$subject->subject_name}}</td>
                                    <td style="width: 15%">{{$subject->totalstudents}}</td>
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
    <a class="navbar-brand" href="#pablo">Curriculum Record</a>
@endsection