@extends('layouts.frontend', ['pageTitle' => ' - Posting Application Feedback'])

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

    {{-- <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Posting Application</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include('layouts.includes.breadcrumb',['main'=> 'Posting','page'=> 'Posting Application']) --}}

    <div class="site-section mt-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-7 text-center">
                   @if (session('status'))
                   <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                   @endif
                </div>
            </div>

        </div>
    </div>

    @endsection
