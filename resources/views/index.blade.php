@extends('layouts.frontend', ['pageTitle' => ' - Home'])

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

    {{-- Include navbar --}}
    @include('layouts.includes.navbar', ['active' => 'home'])

    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>“Enabling an
                            Effective Teaching and
                            Learning Environment."</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>“Enabling an
                            Effective Teaching and
                            Learning Environment."</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div></div>

    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

                    <div class="feature-1 border">
                        <div class="text-center pt-4">
                            <img src="{{asset('images')}}/vision.jpg" alt="Image">
                        </div>
                        <div class="feature-1-content pt-0">
                            <h2>Vision</h2>
                            <p>Ghana Education Service seeks to create an enabling environment in all educational
                                institutions
                                and management positions that will facilitate effective teaching and learning and
                                efficiency in
                                the management for the attainment of the goals of the Service.</p>
                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-1 border">
                        <div class="text-center pt-4">
                            <img src="{{asset('images')}}/mission.png" alt="Image">
                        </div>
                        <div class="feature-1-content pt-0">
                            <h2>Mission</h2>
                            <p>To ensure that all Ghanaian children of school-going age are provided with inclusive and
                                equitable quality formal education and training through effective and efficient
                                management of resources to make education delivery relevant to the manpower needs of the
                                nation.
                            </p>
                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-1 border">
                        <div class="text-center pt-4">
                            <img src="{{asset('images')}}/mandate.png" alt="Image">
                        </div>
                        <div class="feature-1-content pt-0">
                            <h2>Mandate</h2>
                            <p>GES is responsible for the implementation of approved national pre-tertiary educational
                                policies and programs to ensure that all Ghanaian children of school-going age
                                irrespective of tribe, gender, disability, religious and political affiliations are
                                provided with ...
                            </p>

                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title-underline style-2">
                        <span>LATEST NEWS</span>
                    </h2>
                    <div class="news-updates">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="post-entry-big">
                                        <a href="news-single.html" class="img-link"><img
                                                src="{{asset('images')}}/blog_large_1.jpg" alt="Image"
                                                class="img-fluid"></a>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <a href="#">June 6, 2019</a>
                                                <span class="mx-1">/</span>
                                                <a href="#">Admission</a>, <a href="#">Updates</a>
                                            </div>
                                            <h3 class="post-heading"><a href="news-single.html">President Promises One Hot Meal for all Pre-tertiary Schools</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-entry-big horizontal d-flex mb-4">
                                        <a href="news-single.html" class="img-link mr-4"><img
                                                src="{{asset('images')}}/blog_1.jpg" alt="Image" class="img-fluid"></a>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <a href="#">June 6, 2019</a>
                                                <span class="mx-1">/</span>
                                                <a href="#">Admission</a>, <a href="#">Updates</a>
                                            </div>
                                            <h3 class="post-heading"><a href="news-single.html">President Promises One Hot Meal for all Pre-tertiary Schools</a></h3>
                                        </div>
                                    </div>

                                    <div class="post-entry-big horizontal d-flex mb-4">
                                        <a href="news-single.html" class="img-link mr-4"><img
                                                src="{{asset('images')}}/blog_2.jpg" alt="Image" class="img-fluid"></a>
                                        <div class="post-content">
                                            <div class="post-meta">
                                                <a href="#">June 6, 2019</a>
                                                <span class="mx-1">/</span>
                                                <a href="#">Admission</a>, <a href="#">Updates</a>
                                            </div>
                                            <h3 class="post-heading"><a href="news-single.html">President Promises One Hot Meal for all Pre-tertiary Schools</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="section-title-underline style-2">
                        <span>DOWNLOADS</span>
                    </h2>
                    <div class="row mt-5">
                        <div class="container">
                            <div class="col">
                                <ul>
                                    <li class=""><a href="#">Covid-19 Coordinated Education Response Plan for Ghana</a></li>
                                    <li class=""><a href="#">GES Organogram</a></li>
                                    <li class=""><a href="#">Double Track Schools – 2018</a></li>
                                    <li class=""><a href="#">Non-Double Track Schools – 2018</a></li>
                                    <li class=""><a href="#">Press Releases – 2018</a></li>
                                    <li class=""><a href="#">View All Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- // 05 - Block -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-4 mb-5">
                    <h2 class="section-title-underline mb-5">
                        <span>OUR DIRECTORS</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

                    <div class="feature-1 border person text-center">
                        <img src="{{asset('images')}}/person_1.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Professor Kwasi Opoku-Amankwa</h2>
                            <span class="position mb-3 d-block">Director General</span>
                            <p><a href="#">READ MORE</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="{{asset('images')}}/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Lawyer Anthony Boateng</h2>
                            <span class="position mb-3 d-block">Deputy Director General – Management Services</span>
                            <p><a href="#">READ MORE</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="{{asset('images')}}/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Dr Kwabena Bempah Tandoh</h2>
                            <span class="position mb-3 d-block">Deputy Director General – Quality and Access</span>
                            <p><a href="#">READ MORE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>Subscribe to us!</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
                </div>
                <div class="col-lg-5">
                    <form action="" class="d-flex">
                        <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
                        <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
