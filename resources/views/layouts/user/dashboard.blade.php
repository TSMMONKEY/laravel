<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- datepicker styles -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="search-box">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <i class="lni-search"></i>
                        </li>
                        <li class="massages dropdown dropdown-animated scale-left">
                            <span class="counter">3</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-envelope"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <div class="dropdown-item align-self-center">
                                        <h5><span class="badge badge-primary badge-pro float-right">745</span>Messages
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Amanda Robertson
                                                    </span>
                                                    <span class="sub-title">Dummy text of the printing and typesetting
                                                        industry.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Danny Donovan
                                                    </span>
                                                    <span class="sub-title">It is a long established fact that a reader
                                                        will</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Frank Handrics
                                                    </span>
                                                    <span class="sub-title">You have 87 unread messages</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
                                        <a href="#" class="text-gray">View All</a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-alarm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <h5 class="n-title text-center">
                                        <i class="lni-alarm"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="lni-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        5 new messages
                                                    </span>
                                                    <span class="sub-title">4 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        4 new comments
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="lni-users"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        3 Friend Requests
                                                    </span>
                                                    <span class="sub-title">a day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-purple">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        2 new messages
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications</a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item avatar-info">
                                            <div class="media-img">
                                                <img src="assets/img/avatar/avatar.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">@yield('userName')</span>
                                                <span class="sub-title">@yield('userEmail')</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="">
                                        <i class="lni-cog"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile">
                                        <i class="lni-user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu">
                        <li class="side-nav-header mb-5">
                            <a href="/" class="widget nav-logo">
                                <img src="/images/Gondo-Logo1-svg.svg" alt="GSI Security">
                                <span
                                    style="
                                            text-align: center;
                                            font-size: 14px;
                                            display: block;
                                            font-weight: 900;
                                            margin: -17px 0 0 0;
                                            color: #fff;
                                            width: 100%;
                                          ">
                                    GONDO SKILLS INSTITUTE<br>
                                    <small>SECURITY SERVICES</small>
                                </span>
                            </a>
                        </li>
                        <li class="side-nav-header">
                            <span>Welcome Thabani</span>
                        </li>
                        <li class="nav-item dropdown open">
                            <a href="{{route('dashboard')}}" class="dropdown-toggle">
                                <span class="icon-holder">
                                    <i class="lni-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="/client/billing/{name}/{id}">
                                <span class="icon-holder">
                                    <i class="lni-user"></i>
                                </span>
                                <span class="title">Billing</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="/courses/">
                                <span class="icon-holder">
                                    <i class="lni-timer"></i>
                                </span>
                                <span class="title">Courses</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
                                    <i class="lni-unlock"></i>
                                </span>
                                <span class="title">Guards</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="/todo">
                                <span class="icon-holder">
                                    <i class="lni-agenda"></i>
                                </span>
                                <span class="title">Events</span>
                                <span class="arrow">
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
                                    <i class="lni-target"></i>
                                </span>
                                <span class="title">Body Cams</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="/add-client">
                                <span class="icon-holder">
                                    <i class="lni-write"></i>
                                </span>
                                <span class="title">Support</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <!-- Breadcrumb Start -->
                        <div class="breadcrumb-wrapper row">
                            <div class="col-12 col-lg-3 col-md-6">
                                <h4 class="page-title" style="text-transform: capitalize">{{basename(parse_url(url()->current(), PHP_URL_PATH));}}</h4>
                            </div>
                            <div class="col-12 col-lg-9 col-md-6">
                                <ol class="breadcrumb float-right">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">/ {{basename(parse_url(url()->current(), PHP_URL_PATH));}}</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Breadcrumb End -->
                    </div>
                    <!-- Content -->
                    @yield('content')
                    <!-- End Of Content -->

                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
                            <span class="go-right">
                                <a href="" class="text-gray">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery-min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.app.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!--Morris Chart-->
    <script src="/assets/plugins/morris/morris.min.js"></script>
    <script src="/assets/plugins/raphael/raphael-min.js"></script>
    <script src="/assets/js/dashborad1.js"></script>

</body>

</html>
