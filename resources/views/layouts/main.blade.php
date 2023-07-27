<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description"
        content="Enhance your security infrastructure with Gondo Skills Institute's top-notch security services. Our expert team ensures a comprehensive approach to safeguarding your business" />
    <meta name="author" content="Gondo" />

    <title>GSI - @yield('title')</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />
    <!-- fav-Icon -->
    <link rel="shortcut icon" href="/images/black-logo.png" type="image/png" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GL2HYN47LJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GL2HYN47LJ");
    </script>
    @vite('resources/js/app.js', 'vendor/courier/build')
</head>

<body id="section_1">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        121 Eloff Street Extension Teba Park,Selby Johannesburg ,2001
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com"> info@gondoskillsinstitute.co.za </a>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/clear-background-logo.svg" class="logo img-fluid" alt="Gondo Security" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#sectionon_3">courses</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class=".navbar-nav nav-link click-scroll dropdown-toggle" href="#seCITon_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Services</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/on-site-security.html">On-Site Security</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/cash-in-transit.html">Cash-In-Transit</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/satellite-tracking-visual.html">Satellite
                                    Tracking-Visual</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/event-security-management.html">Event Security
                                    Management</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll inactive" href="/#section_6">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/dashboard">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}" class="nav-link custom-btn custom-border-btn btn">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">Log Out</a>
                            </form>
                        </li>
                    @else
                        <li class="nav-item ms-5" style=" margin-left: 10px">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/register" style="padding-right: 5px;">Sign Up</a>
                            <a class="nav-link custom-btn custom-border-btn btn" href="/login" style="padding-left: 0">Log-In</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row" style="text-align: center">
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                    <div class="widget">
                        <img src="/images/Gondo-Logo1-svg.svg" alt="GSI Security" />
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
                            GONDO SKILLS INSTITUTE<br />
                            <small>SECURITY SERVICES</small>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mt-5">
                    <div class="widget">
                        <h3 class="widget-title" style="color: #fff">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" style="color: #d9d8d8 !important">Home</a></li>
                            <li>
                                <a href="/about" style="color: #d9d8d8 !important">About</a>
                            </li>
                            <li>
                                <a href="/#section_3" style="color: #d9d8d8 !important">Courses</a>
                            </li>
                            <li>
                                <a href="/contact" style="color: #d9d8d8 !important">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mt-5">
                    <div class="widget">
                        <h3 class="widget-title" style="color: #fff">About Us</h3>
                        <p style="color: #d9d8d8 !important">
                            Through a collaborative approach, we work closely with our
                            clients to understand their specific security requirements,
                            concerns, and goals.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mt-5">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2" style="color: #d9d8d8 !important"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link"
                            style="color: #d9d8d8 !important">
                            info@gondoskillsinstitute.co.za
                        </a>
                    </p>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2" style="color: #d9d8d8 !important"></i>

                        <a href="tel: (+27) 11-499-4002 / (+27) 11 331 3407" class="site-footer-link"
                            style="color: #d9d8d8 !important">
                            (+27) 11-499-4002 / (+27) 11 331 3407
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3" style="text-align: left; color: #d9d8d8 !important">
                        <i class="bi-geo-alt me-2" style="color: #d9d8d8 !important"></i>
                        121 Eloff Street Extension Teba Park,Selby Johannesburg ,2001
                        ,South Africa
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <p class="copyright-text mb-0" style="text-align: center">
                            Copyright © 2023 <a href="#">GSI:</a>
                            <a href="#" target="_blank">Gondo Skills Institute Security Services</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
