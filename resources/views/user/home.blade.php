@extends('layouts.user.dashboard')

@section('title', 'Home')

@section('userName', $userDetails->name)
@section('userEmail', $userDetails->email)

@section('content')
    @if (session()->has('success'))
    <div class="alert-box">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Great!!!</strong>,{{session('success')}}
        </div>
    </div>
    @elseif (session()->has('error'))
        <div class="alert-box">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Oh snap!</strong> {{session('error')}}
            </div>
        </div>
    @endif
    @if (session()->has('loginSession'))
        <div class="alert-box">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>logged in as</strong> {{session('loginSession')}}
            </div>
        </div>
    @endif
    @if (session()->has('updateSuccess'))
        <div class="alert-box">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{session('updateSuccess')}}</strong> was successfully updated
            </div>
        </div>
    @endif
    <div class="container-fluid">
        <!-- Title Count Start -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <div class="icon"><i class="fas fa-user clients-icon"></i></div>
                                    <p class="text-muted">Clients</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-primary">12</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <div class="icon"><i class="fas fa-building lighter-icon"></i></div>
                                    <p class="text-muted">Sites</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-success">8</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <div class="icon"><i class="fas fa-shield-alt"></i></div>
                                    <p class="text-muted">Guards</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-info">800</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <div class="icon"><i class="fas fa-folder"></i></div>
                                    <p class="text-muted">All Projects</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-purple">35</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Count End -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Overview</h5>
                        <div class="float-right">
                            <ul class="list-inline d-none d-sm-block">
                                <li>
                                    <span class="status"
                                        style="background: #e22a6f !important; background-color:#e22a6f !important"></span>
                                    <span class="text-semibold">Client Satisfaction Rating</span>
                                </li>
                                <li>
                                    <span class="status bg-success"></span>
                                    <span class="text-semibold">Response Time</span>
                                </li>
                                <li>
                                    <span class="status bg-purple"></span>
                                    <span class="text-semibold">Incidents Resolved</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="morris-bar-example" style="height: 372px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="sales-info">
                                    <h3>55</h3>
                                    <span>Users Enrolled In Courses</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="35"
                                        style="width: 46%"></div>
                                </div>
                                <p>42% higher than last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="sales-info">
                                    <h3>34</h3>
                                    <span>Active Gate scanners</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="35"
                                        style="width: 15%"></div>
                                </div>
                                <p>90% higher than last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="sales-info">
                                    <h3>11</h3>
                                    <span>Cam Footage hours</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="35"
                                        style="width: 35%"></div>
                                </div>
                                <p>73% higher than last month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 allClients" style="text-transform: capitalize">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Courses</h4>
                        <div class="selected float-right">
                            <select class="custom-select">
                                <option selected="selected" value="0">Monthly</option>
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-overflow">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <td class="text-dark text-semibold">Course Name</td>
                                    <td class="text-dark text-semibold">Price</td>
                                    <td class="text-dark text-semibold">Part-Time</td>
                                    <td class="text-dark text-semibold">Status</td>
                                    <td class="text-dark text-semibold">Billed</td>
                                    <td class="text-dark text-semibold">Paid</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $item)
                                    <tr>

                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <a
                                                            class="btn btn-circle btn-primary text-white">{{ substr($item->company_name, 0, min(2, strlen($item->company_name))) }}</a>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title text-semibold">{{ $item->company_name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $item->service }}</td>
                                        <td>{{ $item->sites }}</td>
                                        <td><a href="#" class="badge badge-danger">{{ $item->status }}</a></td>
                                        <td>R{{ number_format($item->billed, 1, ',') }}</td>
                                        <td>R{{ number_format($item->paid, 1, ',') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-12 col-xs-12">
      <div class="card">
        <div class="card-body text-center">
          <h4 class="header-title">All Post Incidents</h4>
          <ul class="list-inline widget-chart m-t-20 text-center">
            <li>
              <h4 class=""><b>5</b></h4>
              <p class="text-muted m-b-0">Theft</p>
            </li>
            <li>
              <h4 class=""><b>60</b></h4>
              <p class="text-muted m-b-0">Threats</p>
            </li>
            <li>
              <h4 class=""><b>0</b></h4>
              <p class="text-muted m-b-0">Break-ins</p>
            </li>
          </ul>
          <div id="morris-donut-example" style="height: 240px"></div>
        </div>
      </div>
    </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">My Courses</h4>
                        <div class="card-toolbar">
                            <ul>
                                <li>
                                    <a class="text-gray" href="#">
                                        <i class="lni-more-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-task list-group">
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="followUp" checked="">
                                    <label class="custom-control-label" for="followUp">Follow up clients</label>
                                </div><span class="badge badge-danger">Missed</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="JoinMeeting" checked="">
                                    <label class="custom-control-label" for="JoinMeeting">Join business meeting</label>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="brainstorm" checked="">
                                    <label class="custom-control-label" for="brainstorm">Discuss about new project</label>
                                </div>
                                <span class="badge badge-warning">Today</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newFunnel">
                                    <label class="custom-control-label" for="newFunnel">Design a new funnel</label>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="makeAnewOrder">
                                    <label class="custom-control-label" for="makeAnewOrder">Make a new app</label>
                                </div>
                                <span class="badge badge-success">3 weeks</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0" data-role="task">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox material-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="generalThings">
                                    <label class="custom-control-label" for="generalThings">Send materials</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="follow">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Course Tutors</h4>
                            <div class="card-toolbar">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="#">
                                            <i class="lni-more-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-media">
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <img src="assets/img/avatar/user1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">Johny Vinno</span>
                                        <div class="float-item">
                                            <button class="btn btn-common btn-rounded">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <img src="assets/img/avatar/user2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">Robinson</span>
                                        <div class="float-item">
                                            <button class="btn btn-common btn-rounded">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <img src="assets/img/avatar/user3.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">Chris Anderson</span>
                                        <div class="float-item">
                                            <button class="btn btn-common btn-rounded">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <img src="assets/img/avatar/user4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">Kornelia Sturb</span>
                                        <div class="float-item">
                                            <button class="btn btn-common btn-rounded">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="coming-event">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upcoming Event</h4>
                            <div class="card-toolbar">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="#">
                                            <i class="lni-more-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="event-item">
                            <li>
                                <a href="">
                                    <div class="media">
                                        <div class="img-thumb">
                                            <img class="img-fluid" src="assets/img/event/img-1.jpg" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 class="text-link">Inspire Team</h5>
                                            <p class="day">MAY 11, 2020</p>
                                            <p>Efficiently unleash information </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="media">
                                        <div class="img-thumb">
                                            <img class="img-fluid" src="assets/img/event/img-2.jpg" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 class="text-link">Marketing Products</h5>
                                            <p class="day">MAY 18, 2020</p>
                                            <p>Efficiently unleash information </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- {{$clients;}} --}}
