@extends('layouts.dashboard')

@section('title', 'Courses')

@section('content')
    <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">{{ $singleCourse->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne" style="">
                                    <h5 class="m-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne" class="text-dark collapsed"
                                            style="display: flex; justify-content: space-between;">
                                            <span>{{ $singleCourse->name }}</span>
                                            <i class="lni-angle-double-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="m-3">
                        <a class="btn btn-light m-b-10" href="/course/edit/{{ $singleCourse->name }}/{{ $singleCourse->id }}">
                            Sign Up Now
                        </a>
                        <a class="btn btn-info m-b-10" href="/course/{{ $singleCourse->name }}/{{ $singleCourse->id }}">
                            More
                        </a>
                </div>
            </div>
        <div class="col-lg-12">
            <div class="card">
            </div>
        </div>
    </div>
@endsection
