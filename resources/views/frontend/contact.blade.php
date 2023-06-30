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
                    <div class="social-links mt-3 text-center d-flex justify-content-center">
                        @foreach ($links as $link)
                            <a href="{{ $link->link }}" class="{{ $link->class }}"><i class="{{ $link->icon }}"></i></a>
                        @endforeach
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

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container" data-aos="fade-in">
                <h1>{{ $appSetting->name ?? 'Sasitharan' }}</h1>
                <p>I'm
                    <span class="typed"
                        data-typed-items="
        {{ $appSetting->job1 ?? 'Designer' }},
        {{ $appSetting->job2 ?? 'Developer' }},
        {{ $appSetting->job3 ?? 'Freelancer' }},
        {{ $appSetting->job4 ?? 'Photographer' }}
      "></span>
                </p>
            </div>
        </section><!-- End Hero -->
        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h2>About</h2>
                        <p>{{ $appSetting1->description ??
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                                                            magna aliqua.' }}
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="{{ $appSetting1->image }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3>{{ $appSetting1->title ?? 'FullStack Developer' }}</h3>
                            <p class="fst-italic">
                                {{ $appSetting1->title_description ??
                                    ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                                                                                                magna aliqua.' }}

                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                            <span>{{ $appSetting1->birth_date ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                            <span>{{ $appSetting1->website ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                            <span>{{ $appSetting1->phone ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                            <span>{{ $appSetting1->city ?? 'FullStack Developer' }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                            <span>{{ $appSetting1->age ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                            <span>{{ $appSetting1->degree ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>{{ $appSetting1->email ?? 'FullStack Developer' }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                            <span>{{ $appSetting1->freelance ?? 'FullStack Developer' }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                                adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                                itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                                culpa magni laudantium dolores.
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Facts Section ======= -->
            <section id="facts" class="facts">
                <div class="container">

                    <div class="section-title">
                        <h2>Facts</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $appSetting4->clients ?? '3' }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Happy Clients</strong> consequuntur quae</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $appSetting4->projects ?? '3' }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0"
                                    data-purecounter-end="{{ $appSetting4->hours_of_support ?? '1200' }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span data-purecounter-start="0"
                                    data-purecounter-end="{{ $appSetting4->hard_workers ?? '1' }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Facts Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Skills</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row skills-content">

                        <div class="col-lg-6" data-aos="fade-up">
                            @php
                            $skillItems = $skills->take(3);
                        @endphp
                         @forelse ($skillItems as $skillItem)
                            <div class="progress">
                                <span class="skill">{{ $skillItem->skill }} <i class="val">{{ $skillItem->percentage }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skillItem->percentage }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            @empty
                            <div class="p-2">
                                <h5>No Skills Available</h5>
                            </div>
                        @endforelse
                        </div>
                        <div class="col-lg-6" data-aos="fade-up">
                            @php
                            $skillItems = $skills->take(3);
                        @endphp
                         @forelse ($skillItems as $skillItem)
                            <div class="progress">
                                <span class="skill">{{ $skillItem->skill }} <i class="val">{{ $skillItem->percentage }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skillItem->percentage }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            @empty
                            <div class="p-2">
                                <h5>No Skills Available</h5>
                            </div>
                        @endforelse
                        </div>
                    </div>

                </div>
            </section><!-- End Skills Section -->

            <!-- ======= Resume Section ======= -->
            <section id="resume" class="resume">
                <div class="container">

                    <div class="section-title">
                        <h2>Resume</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">
                            <h3 class="resume-title">Sumary</h3>
                            <div class="resume-item pb-0">
                                <h4>{{ $appSetting3->title ?? 'Sasitharan' }}</h4>
                                <p><em>{{ $appSetting3->description ??
                                    'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                                                                                                                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                                                                                                                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' }}</em>
                                </p>
                                <ul>
                                    <li>{{ $appSetting3->address ?? 'Portland par 127,Orlando, FL' }}</li>
                                    <li>{{ $appSetting3->contact ?? '0778720065' }}</li>
                                    <li>{{ $appSetting3->email ?? 'sasi.sasitharan12@gmail.com' }}</li>
                                </ul>
                            </div>

                            <h3 class="resume-title">Education</h3>
                            @php
                                $educationItems = $educations->take(2);
                            @endphp
                            @forelse ($educationItems as $educationItem)
                                <div class="resume-item">
                                    <h4>{{ $educationItem->title }}</h4>
                                    <h5>{{ $educationItem->start_to }} - {{ $educationItem->end_to }}</h5>
                                    <p><em>{{ $educationItem->univeristy }}</em></p>
                                    <p>{{ $educationItem->description }}</p>
                                </div>
                            @empty
                                <div class="p-2">
                                    <h5>No Education Available</h5>
                                </div>
                            @endforelse
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Professional Experience</h3>
                            @php
                                $professionItems = $professions->take(2); // Limit the number of items to 2
                            @endphp
                            @forelse ($professionItems as $professionItem)
                                <div class="resume-item">
                                    <h4>{{ $professionItem->title }}</h4>
                                    <h5>{{ $professionItem->start_to }} - {{ $professionItem->end_to }}</h5>
                                    <p><em>{{ $professionItem->address }}</em></p>
                                    <ul>
                                        <li>{{ $professionItem->point1 }}</li>
                                        <li>{{ $professionItem->point2 }}</li>
                                        <li>{{ $professionItem->point3 }}</li>
                                        <li>{{ $professionItem->point4 }}</li>
                                    </ul>
                                </div>
                            @empty
                                <div class="p-2">
                                    <h5>No Profession Available</h5>
                                </div>
                            @endforelse
                        </div>


                    </div>

                </div>

                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Portfolio</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                                Sit
                                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                                alias
                                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    @foreach ($categories as $category)
                                        <li data-filter=".filter-{{ Str::slug($category->title) }}">{{ $category->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                            @foreach ($portfolios as $portfolio)
                                <div class="col-lg-3 col-md-6 portfolio-item filter-{{ Str::slug($portfolio->category->title) }}">
                                    <div class="portfolio-wrap">
                                        <img src="{{ asset($portfolio->image) }}" class="img-fluid img-thumbnail" alt="{{ $portfolio->title }}">
                                        <div class="portfolio-links">
                                            <a href="{{ asset($portfolio->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->title }}"><i class="bx bx-plus"></i></a>
                                            <a href="{{ url('/frontend/portfolio_details/' . $portfolio->category->title . '/' . $portfolio->title) }}" title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </section><!-- End Portfolio Section -->

                <!-- ======= Services Section ======= -->
                <section id="services" class="services">
                    <div class="container">

                        <div class="section-title">
                            <h2>Services</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                                Sit
                                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                                alias
                                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row">
                            @php
                                $serviceItems = $services->take(6); // Limit the number of items to 6
                            @endphp
                            @forelse ($serviceItems as $serviceItem)
                                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                                    <h4 class="title"><a href="">{{ $serviceItem->title }}</a></h4>
                                    <p class="description">{{ $serviceItem->description }}</p>
                                </div>
                            @empty
                                <div class="p-2">
                                    <h5>No Services Available</h5>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </section><!-- End Services Section -->

                <section id="testimonials" class="testimonials section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Testimonials</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        @php
                            $testimonialItems = $testimonials->take(6); // Limit the number of items to 6
                        @endphp

                        @if ($testimonialItems->count() > 0)
                            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">

                                    @foreach ($testimonialItems as $testimonialItem)
                                        <div class="swiper-slide">
                                            <div class="testimonial-item" data-aos="fade-up">
                                                <p>
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                    {{ $testimonialItem->review }}
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </p>
                                                <img src="{{ $testimonialItem->image }}" class="testimonial-img" alt="">
                                                <h3>{{ $testimonialItem->name }}</h3>
                                                <h4>{{ $testimonialItem->job }}</h4>
                                            </div>
                                        </div><!-- End testimonial item -->

                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        @else
                            <div class="p-2">
                                <h5>No Reviews Available</h5>
                            </div>
                        @endif

                    </div>
                </section><!-- End Testimonials Section -->


                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container">

                        <div class="section-title">
                            <h2>Contact</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                                Sit
                                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                                alias
                                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row" data-aos="fade-in">

                            <div class="col-lg-5 d-flex align-items-stretch">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>{{ $appSetting2->address ?? 'Sri Lanka' }}</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>{{ $appSetting2->email ?? 'sasi.sasitharan12@gmail.com' }}</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p>{{ $appSetting2->phone ?? '0778720065' }}</p>
                                    </div>

                                    <iframe src="{{ $appSetting2->location }}" frameborder="0"
                                        style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                                </div>

                            </div>

                            @include('frontend.contact_us.create')
                        </div>

                    </div>
                </section><!-- End Contact Section -->

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
