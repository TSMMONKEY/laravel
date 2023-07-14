@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="donate-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mx-auto">

                    <div class="col-lg-5 col-12 mx-auto" id="Contact-Form">
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

                    <!-- <div class="col-lg-12 col-12">
                                            <h5 class="mt-4 pt-1">Choose Payment</h5>
                                          </div>

                                          <div class="col-lg-12 col-12 mt-2">
                                            <div class="form-check">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="DonationPayment"
                                                id="flexRadioDefault9"
                                              />
                                              <label class="form-check-label" for="flexRadioDefault9">
                                                <i class="bi-credit-card custom-icon ms-1"></i>
                                                Debit or Credit card
                                              </label>
                                            </div>

                                            <div class="form-check">
                                              <input
                                                class="form-check-input"
                                                type="radio"
                                                name="DonationPayment"
                                                id="flexRadioDefault10"
                                              />
                                              <label class="form-check-label" for="flexRadioDefault10">
                                                <i class="bi-paypal custom-icon ms-1"></i>
                                                Paypal
                                              </label>
                                            </div>

                                            <button type="submit" class="form-control mt-4">
                                              Submit Donation
                                            </button>
                                          </div> -->
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
