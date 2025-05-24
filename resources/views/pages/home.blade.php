@extends('layout.app')

@section('content')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>JeetSinghTraders</span></h2>
            <b data-aos="fade-up">
              <p> We supply <b>Ultratech Cement</b> and all essential construction materials.
              Our <b>12-tyre trucks</b> are ready to transport <b>bricks, sand, and gravel</b> anytime.
              Fast delivery and reliable service at the best prices!</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)">
      </div>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Build stronger with us — reliable supply, premium quality, and on-time delivery.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Ultratech Cement</h3>
              <p>We are trusted suppliers of Ultratech Cement, India’s No.1 cement brand known for strength and durability.
                Whether you're building a home, office, or commercial space — we ensure timely and bulk delivery at the best price.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-truck-moving"></i>
              </div>
              <h3>Transport & Delivery Services</h3>
              <p>We provide reliable logistics with 3 powerful 12-tyre trucks for bulk loading and unloading of cement, bricks, sand, and gravel.
                For smaller and more flexible deliveries.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci
                eos earum corrupti.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Achievements</h2>
          <p>Proudly delivering quality building materials across the region with 1000+ successful site deliveries and 100% customer satisfaction.
            Trusted by builders, contractors, and homeowners for timely service and reliable transport solutions.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/achievement1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/achievement2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/achievement3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

     <!-- ======= Get Started Section ======= -->
     <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Need Assistance? Let’s Talk!</h3>
              <p>Got a question about Ultratech Cement, bricks, sand, gravel, or our transport services?
                Fill out the form and our team will get back to you shortly.
                We’re happy to help with any construction-related needs – big or small!</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="{{route('contact.post')}}" method="post" class="php-email-form">
              @csrf
              <h3>Get a quote</h3>
              <input type="hidden" name="query_form" value="1">
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="error-message"></div>
                  @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif

                  <button type="submit">Submit</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

  </main><!-- End #main -->
@endsection