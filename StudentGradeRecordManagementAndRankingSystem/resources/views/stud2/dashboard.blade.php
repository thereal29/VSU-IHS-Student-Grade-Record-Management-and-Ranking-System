@extends('stud2.navigation')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row col-md-12">
            <div class="col-sm-4">
                <div class="small-box shadow-sm border">
                <div class="inner">
                    <h3></h3>
                    <p>Deficiency Status</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="small-box shadow-sm border">
                <div class="inner">
                    <h3>0</h3>
                    <p>Co Curricular Status</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                </div>
            </div>   
            <div class="col-sm-4">
                <div class="small-box shadow-sm border">
                <div class="inner">
                    <h3></h3>
                    <p>Total Students</p>
                </div>
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                </div>
            </div>       
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>  
                    @endif
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
@section('pagetitle')
    <a class="navbar-brand" href="#pablo">Dashboard</a>
@endsection