@extends('layouts.index')
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="green">
      <div class="logo">
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'stud4/dashboard' == request()->path() ? 'active' : ''}}">
            <a href="/stud4/dashboard">
              <i class="bx bx-grid-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ 'stud4/profile' == request()->path() ? 'active' : ''}}">
            <a href="/stud4/profile">
              <i class="bx bx-user"></i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="{{ 'stud4/class' == request()->path() ? 'active' : ''}}">
            <a href="/stud4/class">
              <i class="bx bx-user"></i>
              <p>My Class</p>
            </a>
          </li>
          <li class="{{ 'stud4/ranking' == request()->path() ? 'active' : ''}}">
            <a href="/stud4/ranking">
              <i class="bx bx-user"></i>
              <p>My Ranking</p>
            </a>
          </li>
          <li class="{{ 'stud4/grades' == request()->path() ? 'active' : ''}}">
            <a href="/stud4/grades">
              <i class="bx bxs-file"></i>
              <p>Grades</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            @yield('pagetitle')
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Notifications</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">{{Auth::user()->username}}</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/admin/profile">Profile</a>
                  <a class="dropdown-item" href="#">Account Settings</a>
                  <a class="dropdown-item show_confirm" href="#"></i>Logout</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link show_confirm">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">{{ __('Logout') }}</span>
                  </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li> -->
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->