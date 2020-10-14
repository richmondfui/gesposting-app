<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($pageTitle) ? config('app.name').$pageTitle : config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts')}}/icomoon/style.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('css')}}/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{asset('fonts')}}/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('css')}}/aos.css">
    <link href="{{asset('css')}}/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css')}}/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <p class="mt-4"><img width="160px" src="{{asset('images')}}/footer_logo.png" alt="Image"
                            class="img-fluid"></p>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Quick Links</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Ministry of Education</a></li>
                        <li><a href="#">GES Promotions Portal</a></li>
                        <li><a href="#">CSSPS</a></li>
                        <li><a href="#">FREESHS</a></li>
                        <li><a href="#">NACCA</a></li>
                        <li><a href="#">NACCA Curriculum</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Address</span></h3>
                    <address>
                        Digital Address: GA 111-5469

                        Postal: Box M 45, Ministries, Accra-Ghana

                        Physical: Ministry of Education Building, Accra
                    </address>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>General Links</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">(233) 302 673-957</a></li>
                        <li><a href="#">info@ges.gov.gh</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made with <i class="icon-heart"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#fbbd02" /></svg></div>

    <script src="{{asset('js')}}/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js')}}/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('js')}}/jquery-ui.js"></script>
    <script src="{{asset('js')}}/popper.min.js"></script>
    <script src="{{asset('js')}}/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/owl.carousel.min.js"></script>
    <script src="{{asset('js')}}/jquery.stellar.min.js"></script>
    <script src="{{asset('js')}}/jquery.countdown.min.js"></script>
    <script src="{{asset('js')}}/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('js')}}/jquery.easing.1.3.js"></script>
    <script src="{{asset('js')}}/aos.js"></script>
    <script src="{{asset('js')}}/jquery.fancybox.min.js"></script>
    <script src="{{asset('js')}}/jquery.sticky.js"></script>
    <script src="{{asset('js')}}/jquery.mb.YTPlayer.min.js"></script>
    <script src="{{asset('js')}}/main.js"></script>
</body>

</html>
