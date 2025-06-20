  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png')}}" />
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}" class="active">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->