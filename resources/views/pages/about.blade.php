@extends('layout.app')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/shop-photo.jpeg);"></div>

          <div class="col-lg-7">
            <h2>Building Dreams Since 2022</h2>
            <div class="our-story">
              <h4>Est 2022</h4>
              <h3>Our Story</h3>
              <p>Established on 10th February 2022, our shop began as a small-scale business with a vision to provide quality building materials at reliable prices. Over the years, through dedication and hard work, we have built a strong network and earned the trust of our customers.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Established on 10th February 2022 with a strong commitment to quality and service.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>End-to-end construction material supply — UltraTech cement, sand, iron, gitti, and more.</span></li>
                <li><i class="bi bi-check-circle"></i> <span> Reliable transport services including 12-tyre trucks, chhota hathi, and tempo for delivery.</span></li>
              </ul>
              {{-- <p>We proudly supply UltraTech Cement, sand, iron, and other construction essentials, along with 12-tyre trucks, chhota hathi, and tempo transport services for smooth delivery and logistics.
                Our journey has just begun — and we’re committed to expanding even further while serving you better every day.</p> --}}

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="{{asset('assets/video/about.mp4')}}" class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

  </main><!-- End #main -->

@endsection