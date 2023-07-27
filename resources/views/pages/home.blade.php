@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/security.jpg" class="carousel-image img-fluid" alt="..." />

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>We Provide</h1>

                                    <p>
                                        quality training and highly skilled security services
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/hero-section3.jpg" class="carousel-image img-fluid" alt="..." />

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>We Have over</h1>

                                    <p>
                                        14 years in the industry and over 1 million graduates
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/hero-section4.jpg" class="carousel-image img-fluid" alt="..." />

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Humanity</h1>

                                    <p>Please tell your friends about our Us</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="images/our-story-BLACK-AND-WHITE.png" class="custom-text-box-image img-fluid"
                        alt="" />
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Our Story</h2>

                        <h5 class="mb-3">Gondo Skills Institute Security Services</h5>

                        <p class="mb-0">
                            Gondo Skills Institute Security Services(GSI) is a South
                            African company that provides security guards and security
                            services to businesses and individuals. The company offers a
                            wide range of security services, including armed response,
                            unarmed response, CCTV monitoring, and access control. Gondo
                            Skills Institute Security Services is a registered security
                            company with the Private Security Industry Regulatory
                            Authority (PSIRA).
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>Gondo Skills Institute Security Services mission:</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Protect people and property
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Prevent crime
                                    </li>
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Respond to emergencies
                                    </li>
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Provide peace of mind
                                    </li>
                                    <!-- <li class="custom-list-item d-flex">
                            <i class="bi-check custom-text-box-icon me-2"></i>
                            Offer excellent customer service
                        </li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="100" data-to="1"
                                            data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Million Graduates</span>
                                </div>
                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="14" data-speed="100"></span>
                                        <span class="counter-number-text"> +</span>
                                    </div>

                                    <span class="counter-text">Years Experience</span>
                                </div>

                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2009" data-speed="2004"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Founded</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">
                        Value Added Security <br />
                        Courses.
                    </h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make the right decision </a>

                    <a href="#section_4" class="custom-btn btn smoothscroll">sign up
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Our Courses</h2>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="images/ecd-training.jpg" class="custom-block-image img-fluid" alt=""
                            style="height: 237px" />

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">EDC Training</h5>

                                <p>
                                    Our accredited EDC training, officially endorsed by PSIRA,
                                    offers the opportunity to obtain your ECD certificates
                                    efficiently.....
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Price:</strong>
                                        R1 600
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Part Time:</strong>
                                        R1 800
                                    </p>
                                </div>
                            </div>

                            <a href="sign-up.html" class="custom-btn btn">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="images/AdobeStock_443291657_Preview.jpeg" class="custom-block-image img-fluid"
                            alt="" style="height: 237px" />

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Grade E-A Training</h5>

                                <p>
                                    A Grade security training equips individuals knowledge and
                                    skills needed in the field of security and protection...
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Price:</strong>
                                        R800
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Part Time:</strong>
                                        R950
                                    </p>
                                </div>
                            </div>

                            <a href="sign-up.html" class="custom-btn btn">Sign Up Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="custom-block-wrap">
                        <img src="images/training-course.jpg" class="custom-block-image img-fluid" alt=""
                            style="height: 237px" />

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">
                                    Cash In Transit (CIT) Security Training
                                </h5>

                                <p>
                                    Cash In Transit security training equips individuals
                                    knowledge and skills needed in the field of security and
                                    protection...
                                </p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Price:</strong>
                                        N/A
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Part Time:</strong>
                                        R950
                                    </p>
                                </div>
                            </div>

                            <a href="sign-up.html" class="custom-btn btn">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="text-white mb-4">
                        Sign Up And Start with Your Training
                    </h2>
                    @if ($errors->any())
                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/" method="post"
                        role="form">
                        @csrf

                        <h3 class="mb-4">Sign Up for our courses</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="firstName">First Name:</label>
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                    placeholder="Name" required />
                                @error('first-name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="lastName">Last Name:</label>
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                    placeholder="Last Name" required />
                            </div>
                        </div>
                        <label for="email">Email:</label>
                        @foreach ($errors->all() as $error)
                            <input type="email" name="subscribe-email" id="subscribe-email"
                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required />
                        @endforeach
                        @error('subscribe-email')
                            <div class="alert alert-danger">{{ $error }}</div>
                        @enderror

                        <label for="message">Message:</label>
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you with?"></textarea>

                        <button type="submit" class="form-control">
                            Subscribe
                        </button>
                    </form>
                @else
                <form class="custom-form contact-form" action="/" method="post" role="form">

                    @csrf

                    <h3 class="mb-4">Sign Up for our courses</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="first-name" id="first-name" class="form-control"
                                placeholder="Name" required />
                            @error('first-name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <label for="lastName">Last Name:</label>
                            <input type="text" name="last-name" id="last-name" class="form-control"
                                placeholder="Last Name" required />
                        </div>
                    </div>
                    <label for="email">Email:</label>
                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                        class="form-control" placeholder="Email Address" required />
                    @error('subscribe-email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="message">Message:</label>
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you with?"></textarea>

                    <button type="submit" class="form-control">
                        Subscribe
                    </button>
                </form>
            @endif
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>

                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                121 Eloff Street ext Teba Park Selby, Johannesburg
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: 120-240-9600">
                                    (+27) 11-499-4002 / (+27) 11 331 3407
                                </a>
                            </p>

                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>

                                <a href="mailto:info@yourgmail.com">
                                    info@gondoskillsinstitute.co.za </a>
                            </p>

                            <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto">
                    @if ($errors->any())
                    <form class="custom-form contact-form" action="" method="post" role="form">
                        <div class="col-lg-12 col-12">
                            <h5 class="mt-1">Personal Info</h5>
                        </div>

                        @csrf

                        <h2>Contact form</h2>

                        <p class="mb-4">
                            Or, you can just send an email:
                            <br /><a href="#">info@gondoskillsinstitute.co.za </a>
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="firstName">First Name:</label>
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                    placeholder="Name" required />
                                @error('first-name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="lastName">Last Name:</label>
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                    placeholder="Last Name" required />
                            </div>
                        </div>
                        <label for="email">Email:</label>
                        @foreach ($errors->all() as $error)
                            <input type="email" name="subscribe-email" id="subscribe-email"
                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required />
                        @endforeach
                        @error('subscribe-email')
                            <div class="alert alert-danger">{{ $error }}</div>
                        @enderror

                        <label for="message">Message:</label>
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you with?"></textarea>

                        <button type="submit" class="form-control">
                            Subscribe
                        </button>
                    </form>
                @else
                    <form class="custom-form contact-form" action="/" method="post" role="form">
                        <div class="col-lg-12 col-12">
                            <h5 class="mt-1">Personal Info</h5>
                        </div>

                        @csrf

                        <h2>Contact form</h2>

                        <p class="mb-4">
                            Or, you can just send an email:
                            <br /><a href="#">info@gondoskillsinstitute.co.za </a>
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="firstName">First Name:</label>
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                    placeholder="Name" required />
                                @error('first-name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="lastName">Last Name:</label>
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                    placeholder="Last Name" required />
                            </div>
                        </div>
                        <label for="email">Email:</label>
                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email Address" required />
                        @error('subscribe-email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="message">Message:</label>
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you with?"></textarea>

                        <button type="submit" class="form-control">
                            Subscribe
                        </button>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </section>
@endsection
