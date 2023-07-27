@extends('layouts.dashboard')

@section('title', 'Courses')

@section('content')
    <div class="d-flex">
        <div class="row d-flex">
            @foreach ($allCourses as $course)
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">{{ $course->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                <div class="card">
                                    <img src="https://codeskdhaka.com/html/eduman-prv/eduman/assets/img/course/course-02.jpg"
                                        class="card-img-top" alt="...">
                                        <p>
                                            {{$course->description}}
                                        </p>
                                        <div class="m-3">
                                            <a class="btn btn-light m-b-10" href="/course/edit/{{ $course->name }}/{{ $course->id }}">
                                                Sign Up Now
                                            </a>
                                            <a class="btn btn-info m-b-10" href="/course/{{ $course->name }}/{{ $course->id }}">
                                                More
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12">
                <div class="card">
                    {{ $allCourses->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
