@extends('layouts.dashboard')

@section('title', 'Add New Client')

@section('content')
    <div class="row">
        @foreach ($allClients as $client)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">{{ $client->company_name }}</h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne" style="">
                                    <h5 class="m-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne" class="text-dark collapsed"
                                            style="display: flex; justify-content: space-between;">
                                            <span>{{ $client->company_name }}</span>
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
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">
                                        <a class="collapsed text-dark" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo"
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
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="m-0">
                                        <a class="collapsed text-dark" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
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
                        <a class="btn btn-light m-b-10" href="/client/edit/{{ $client->company_name }}/{{ $client->id }}">
                            Edit Client
                        </a>
                        <button class="btn btn-common m-b-10" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">Delete</button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <form class="card card-body"
                            action="{{ route('destroy', ['name' => $client->company_name, 'id' => $client->id]) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light m-b-10" type="submit">
                                Are you sure you want to delete <strong>{{ $client->company_name }}</strong>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-lg-12">
            <div class="card">
                {{$allClients->links()}}
            </div>
        </div>
    </div>
@endsection
