<div class="py-2 bg-light">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
              <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a
                  questions?</a>
              <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
              <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>
                  info@ges.gov.gh</a>
          </div>

          <div class="col-lg-3 text-right">
              <div class="social-wrap">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>

                  <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                          class="icon-menu h3"></span></a>
              </div>
          </div>
      </div>
  </div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

  <div class="container">
    <div class="d-flex align-items-center">
      <div class="site-logo">
        <a href="{{url('/')}}" class="d-block">
          <img width="150px" src="{{asset('images')}}/logo.png" alt="Image" class="img-fluid">
        </a>
      </div>
      <div class="mr-auto">
        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="{{(!empty($active) && $active == 'home') ? 'active' :''}}">
              <a href="{{url('/')}}" class="nav-link text-left">Home</a>
            </li>
            <li class="has-children {{(!empty($active) && $active == 'about') ? 'active' :''}}">
              <a href="" class="nav-link text-left">About GES</a>
              <ul class="dropdown">
                <li><a href="">About Us</a></li>
                <li><a href="">About the Director General</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="" class="nav-link text-left">Divisions/Units</a>
              <ul class="dropdown">
                <li><a href="">Secondary Education Division</a></li>
                <li><a href="">Basic Education Division</a></li>
                <li><a href="">Technical & Vocational Division</a></li>
                <li><a href="">Guidance & Counselling Unit</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="" class="nav-link text-left">Projects & Services</a>
              <ul class="dropdown">
                <li><a href="">Quick Links</a></li>
                <li><a href="">Programs</a></li>
              </ul>
            </li>
            <li class="has-children {{(!empty($active) && $active == 'posting'  || $active == 'posting-reg') ? 'active' :''}}">
              <a href="{{route('posting')}}" class="nav-link text-left">Postings</a>
              <ul class="dropdown">
                <li class="{{(!empty($active) && $active == 'posting-reg') ? 'active' :''}}"><a href="{{route('posting.register')}}">Apply for Posting</a></li>
                <li class="{{(!empty($active) && $active == 'transfer') ? 'active' :''}}"><a href="#">Apply for Transfer</a></li>
              </ul>
            </li>
            <li>
              <a href="" class="nav-link text-left">Media</a>
            </li>
            <li>
              <a href="" class="nav-link text-left">Contact</a>
            </li>
          </ul>
          </ul>
        </nav>

      </div>

    </div>
  </div>

</header>
