@extends('layouts.dashboard')

@section('title', 'Add New Client')

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-header border-bottom">
                <h4 class="card-title">Enter Client Details</h4>
            </div>
            <div class="card-body">
                <form class="form-sample" method="POST" action="">

                  @csrf

                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="company_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Billed Amount(zar)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="15000" type="number" name="billed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Service</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="services">
                                        <option value="on-site-security">On-Site Security</option>
                                        <option value="cash-in-transit">Cash-In-Transit</option>
                                        <option value="satelite-tracking-visual">Satelite-Tracking-visual</option>
                                        <option value="event-security-service">Event-Security-Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3">Membership</label>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="status" id="male"
                                            value="done">
                                        <label class="custom-control-label" for="Done" value="Done">Done</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="status" id="male"
                                            value="onhold">
                                        <label class="custom-control-label" for="Hold">On-Hold</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="status" id="gender"
                                            value="Proccessing">
                                        <label class="custom-control-label" for="gender">Professional</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sites</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="sites">
                                        <option value="onsite">Onsite</option>
                                        <option value="tracking">Tracking</option>
                                        <option value="CIT">CIT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Paid Amount(zar)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="15000" type="number" name="paid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description">
                        Address
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address1">
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="state">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="postcode">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" name="phoneNumber">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-common mr-3">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
