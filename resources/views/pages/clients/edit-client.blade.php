@extends('layouts.dashboard')

@section('title', 'Add New Client')

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-header border-bottom">
                <h4 class="card-title">Enter Client Details</h4>
            </div>
            <div class="card-body">
                <form class="form-sample" method="POST" action="{{route('update', ['name'=> $clientDetails->company_name,'id' => $clientDetails->id])}}">

                  @csrf
                  @method('PUT')

                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="company_name" value="{{old('company_name', $clientDetails->company_name)}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Billed Amount(zar)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="15000" type="number" name="billed" value="{{old('biled', $clientDetails->billed)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Service</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="services" value="{{old('services', $clientDetails->services)}}" placeholder="Choose Service">
                                        <option value="on-site-security" @selected(old('services', $clientDetails->services))>On-Site Security</option>
                                        <option value="cash-in-transit" @selected(old('services', $clientDetails->services))>Cash-In-Transit</option>
                                        <option value="satelite-tracking-visual" @selected(old('services', $clientDetails->services))>Satelite-Tracking-visual</option>
                                        <option value="event-security-service" @selected(old('services', $clientDetails->services))>Event-Security-Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3">Membership</label>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="status" id="male" value="{{old('status', $clientDetails->status)}}" >
                                        <label class="custom-control-label" for="Done" value="Done">Done</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="done" id="male"
                                        value="{{old('status', $clientDetails->status)}}">
                                        <label class="custom-control-label" for="Hold">On-Hold</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="status" id="gender"
                                        value="proccessing" value="proccessing" @selected(old('status', $clientDetails->status))>
                                        <label class="custom-control-label" for="gender">Proccessing</label>
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
                                        <option value="on-site" @selected(old('sites', $clientDetails->sites))">Onsite</option>
                                        <option value="tracking" @selected(old('sites', $clientDetails->sites))>Tracking</option>
                                        <option value="cit" @selected(old('sites', $clientDetails->sites))>CIT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Paid Amount(zar)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="15000" type="number" name="paid" value="{{old('paid', $clientDetails->paid)}}">
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
                                    <input type="text" class="form-control" name="address1" value="{{old('address1', $clientDetails->address1)}}">
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="state" value="{{old('state', $clientDetails->state)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address2" value="{{old('address2', $clientDetails->address2)}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="postcode" value="{{old('postalCode', $clientDetails->postalCode)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="city" value="{{old('city', $clientDetails->city)}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" name="phoneNumber" value="{{old('phoneNumber', $clientDetails->phoneNumber)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-common mr-3">edit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
