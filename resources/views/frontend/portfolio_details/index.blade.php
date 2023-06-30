@extends('layouts.app')

@section('content')
    </head>

    <body>
          <!-- ======= Mobile nav toggle button ======= -->
          <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

          <!-- ======= Header ======= -->
          <header id="header">
              <div class="d-flex flex-column">

                  <div class="profile">
                      <img src="{{ $appSetting1->image }}" alt="" class="img-fluid rounded-circle">
                      <h1 class="text-light"><a href="">{{ $appSetting->name ?? 'Sasitharan' }}</a></h1>
                      <div class="social-links mt-3 text-center">
                          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                  </div>

                  <nav id="navbar" class="nav-menu navbar">
                      <ul>
                          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                  <span>Home</span></a></li>
                          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                          </li>
                          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                                  <span>Resume</span></a></li>
                          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                                  <span>Portfolio</span></a></li>
                          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                                  <span>Services</span></a></li>
                          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                                  <span>Contact</span></a></li>
                      </ul>
                  </nav><!-- .nav-menu -->
              </div>
          </header><!-- End Header -->
    <main id="main">
        <section id="portfolio_details" class="portfolio_details">
<h4>hi sasi</h4>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright {{ $appSetting5->year ?? '2023' }}<strong><span> {{ $appSetting5->title ?? 'My Portfolio' }}</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="{{ $appSetting5->link ?? 'www.sasitharan.com' }}">{{ $appSetting5->designer ?? 'Sasitharan' }}</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    </body>

    </html>
@endsection
