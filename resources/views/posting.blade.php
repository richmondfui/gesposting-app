@extends('layouts.frontend', ['pageTitle' => ' - Apply for Posting'])

@section('content')

<div class="site-wrap">


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.includes.navbar', ['active' => 'posting'])

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Postings</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{route('posting.register')}}"><img src="{{asset('images')}}/course_1.jpg"
                                    alt="Image" class="img-fluid"></a>
                            <div class="category">
                                <h3>Apply For Posting</h3>
                            </div>
                        </figure>
                        <div class="course-1-content pb-4">

                            <p class="desc mb-4">Apply to be posted</p>
                            <p><a href="{{route('posting.register')}}" class="btn btn-primary rounded-0 px-4">Apply
                                    Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="#"><img src="{{asset('images')}}/course_2.jpg"
                                    alt="Image" class="img-fluid"></a>
                            <div class="category">
                                <h3>Check Posting Status</h3>
                            </div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <form action="{{ route('posting.check_status') }}" method="get">
                                @csrf
                                <div class="mb-2">
                                    <input type="text" placeholder="Enter code here.. e.g 02ef13saq" name="code" class="form-control" required>
                                </div>
                                <p><button type="submit" class="btn btn-primary rounded-0 px-4">Check
                                        Now</button></p>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{route('transfer.request')}}"><img src="{{asset('images')}}/course_3.jpg"
                                    alt="Image" class="img-fluid"></a>
                            <div class="category">
                                <h3>Make Transfer Request</h3>
                            </div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <p class="desc mb-4">Make a transfer request here</p>
                            <p><a href="{{route('transfer.request')}}" class="btn btn-primary rounded-0 px-4">
                                    Request Now</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
