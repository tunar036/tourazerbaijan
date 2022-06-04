@extends('layouts.frontend.master')
@section('title')
    Kredit-emlak.az
@endsection
@section('keyword')
@endsection
@section('description')
@endsection
@section('head')
@endsection
@section('content')
    <!--Preload-->
    <div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>
    @include('frontend.sections.header')
    <!-- end nav -->
    <section class="carousel slide" id="banner" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h3 class="animated fadeInDown">Explore Your Travel</h3>
                                    <h1 class="animated fadeInUp">Start planning your dream trip today!</h1>
                                    <p class="animated fadeInUp">I travel not to go anywhere, but to go. I travel for
                                        travel's sake the great affair is to move.</p>
                                    <div class="banner-button-group">
                                        <a href="contact-us.html" class="btn btn-primary animated fadeInUp">Contact
                                            Us</a>
                                        <a href="tours.html" class="btn btn-primary learn-more animated fadeInUp">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="tilt-img" src="{{ asset('frontend/img/banner/slide-1.png') }}"
                                    alt="Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h3 class="animated fadeInLeft">Explore Your Travel</h3>
                                    <h1 class="animated fadeInLeft">Trusted Travel Agency</h1>
                                    <p class="animated fadeInLeft">I travel not to go anywhere, but to go. I travel for
                                        travel's sake the great affair is to move.</p>
                                    <div class="banner-button-group">
                                        <a href="contact-us.html" class="btn btn-primary animated fadeInUp">Contact
                                            Us</a>
                                        <a href="tours.html" class="btn btn-primary learn-more animated fadeInUp">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="tilt-img" src="{{ asset('frontend/img/banner/slide-2.png') }}"
                                    alt="Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h3 class="animated fadeInRight">Explore Your Travel</h3>
                                    <h1 class="animated fadeInRight">Get Exclusive Tour</h1>
                                    <p class="animated fadeInRight">I travel not to go anywhere, but to go. I travel for
                                        travel's sake the great affair is to move.</p>
                                    <div class="banner-button-group">
                                        <a href="contact-us.html" class="btn btn-primary animated fadeInUp">Contact
                                            Us</a>
                                        <a href="tours.html" class="btn btn-primary learn-more animated fadeInUp">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="tilt-img" src="{{ asset('frontend/img/banner/slide-3.png') }}"
                                    alt="Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="shape1 d-none d-lg-block">
                <img src="img/banner/banner-shape1.png" alt="">
            </div>
            <div class="shape2 d-none d-lg-block">
                <img src="img/banner/banner-shape2.png" alt="">
            </div>
            <div class="shape3 d-none d-lg-block">
                <img src="img/banner/banner-shape3.png" alt="">
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start destination -->
    <section class="section-spacing inverse-bg destinations">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="mt-n6">Destinations</h3>
                        <h2 class="mb-0">Choose Your Place</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-cues="slideInLeft">
                <div class="col-md-6 col-12">
                    <div class="destination-item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/1.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Malé</h4>
                                <h3>Maldives</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="destination-item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/2.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Bangkok</h4>
                                <h3>Thailand</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="destination-item item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/3.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Kuala Lumpur</h4>
                                <h3>Malaysia</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="destination-item item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/4.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Kathmandu</h4>
                                <h3>Nepal</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="destination-item item mb-0">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/5.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Jakarta</h4>
                                <h3>Indonesia</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end destination -->
    <!-- start about us -->
    <section class="section-spacing about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="about-us-left" data-cues="slideInUp">
                        <h3 class="mt-n6">About Us</h3>
                        <h2>Explore all tour of the world with us.</h2>
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly believable.</p>
                        <div class="about-info" data-cues="slideInLeft">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="align-self-start mr-3 media-icon">
                                        <i class="far fa-compass"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-0">Tour guide</h5>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="align-self-start mr-3 media-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-0">Friendly price</h5>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <span class="align-self-start mr-3 media-icon">
                                        <i class="fas fa-umbrella-beach"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-0">Reliable tour</h5>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cta-button">
                            <a href="booking.html" class="btn btn-primary">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="about-right">
                        <img class="tilt-img" src="{{ asset('frontend/img/about/1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us -->
    <!-- start features -->

    <section class="section-spacing features" style="background-image: url({{ asset('frontend/img/features/1.png') }});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7 col-lg-5" data-cues="slideInRight">
                    <h3 class="mt-n6">Love where you're going</h3>
                    <h2>Learn new things by traveling the world.</h2>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour, or randomised words which don't look even slightly believable.</p>
                    <div class="play-button" data-cues="slideInRight">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video-modal">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="features-items" data-cues="slideInRight">
                        <div class="feature-item">
                            <h3>
                                <span class="counter">500</span>k
                            </h3>
                            <h4 class="mb-0">Our local guides</h4>
                        </div>
                        <div class="feature-item">
                            <h3>
                                <span class="counter">100</span>%
                            </h3>
                            <h4 class="mb-0">Trusted tour agency</h4>
                        </div>
                        <div class="feature-item">
                            <h3>
                                <span class="counter">99</span>%
                            </h3>
                            <h4 class="mb-0">Travel happiness</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features -->
    <!-- start popular tours -->
    <section class="section-spacing tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="mt-n6">Featured Tours</h3>
                        <h2 class="mb-0">Most Popular Tours</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-cues="slideInRight">
                <div class="col-md-6 col-lg-4">
                    <a href="tours-details.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/tour/1.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 12 Days </span>
                            <div class="card-body">
                                <div class="tour-tags">
                                    <span class="tour-price">From $50.00</span>
                                    <span class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> (2) </span>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <p class="mb-0">Kuala Lumpur, Malaysia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="tours-details.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/tour/2.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 12 Days </span>
                            <div class="card-body">
                                <div class="tour-tags">
                                    <span class="tour-price">From $50.00</span>
                                    <span class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> (2) </span>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <p class="mb-0">Kuala Lumpur, Malaysia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="tours-details.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/tour/3.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 12 Days </span>
                            <div class="card-body">
                                <div class="tour-tags">
                                    <span class="tour-price">From $50.00</span>
                                    <span class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> (2) </span>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <p class="mb-0">Kuala Lumpur, Malaysia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 d-block d-lg-none">
                    <a href="tours-details.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/tour/1.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 12 Days </span>
                            <div class="card-body">
                                <div class="tour-tags">
                                    <span class="tour-price">From $50.00</span>
                                    <span class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> (2) </span>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <p class="mb-0">Kuala Lumpur, Malaysia</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end popular tours -->
    <!-- start testimonials -->
    <section class="section-spacing reviews inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="mt-n6">Testimonials & Reviews</h3>
                        <h2 class="mb-0">Our Traveler Says</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="reviews-left">
                        <img class="tilt-img" src="{{ asset('frontend/img/testimonials/1.png') }}" alt="">
                        <div class="review-shape1"></div>
                        <div class="review-shape2"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="carousel slide" id="testimonial-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="review-item">
                                    <h5>Madison Aria</h5>
                                    <div class="traveller">( Abubakar Siddique )</div>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review-item">
                                    <h5>Madison Aria</h5>
                                    <div class="traveller">( Abubakar Siddique )</div>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review-item">
                                    <h5>Madison Aria</h5>
                                    <div class="traveller">( Abubakar Siddique )</div>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form the
                                        injected humour, or randomised words which don't look even slightly believable
                                        to if you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="brand-section">
                        <div class="brand-image">
                            <img src="{{ asset('frontend/img/testimonials/brand1.png') }}" alt="">
                        </div>
                        <div class="h-border"></div>
                        <div class="brand-image">
                            <img src="{{ asset('frontend/img/testimonials/brand2.png') }}" alt="">
                        </div>
                        <div class="h-border"></div>
                        <div class="brand-image">
                            <img src="{{ asset('frontend/img/testimonials/brand3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->
    <!-- start blog -->
    <section class="section-spacing blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="mt-n6">From The Blog Post</h3>
                        <h2 class="mb-0">Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-cues="zoomOut">
                <div class="col-md-6 col-lg-4">
                    <a href="blog-single.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/blog/1.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 04 Dec </span>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="align-self-start mr-3 media-icon">
                                            <img src="{{ asset('frontend/img/blog/author.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="m-0">Jony bristow</h5>
                                        <p class="m-0">Admin</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="align-self-end"> 10:30 AM </span>
                                    </div>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <span class="read-more">Read More <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="blog-single.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/blog/2.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 04 Dec </span>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="align-self-start mr-3 media-icon">
                                            <img src="{{ asset('frontend/img/blog/author.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="m-0">Jony bristow</h5>
                                        <p class="m-0">Admin</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="align-self-end"> 10:30 AM </span>
                                    </div>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <span class="read-more">Read More <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="blog-single.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/blog/3.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 04 Dec </span>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="align-self-start mr-3 media-icon">
                                            <img src="{{ asset('frontend/img/blog/author.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="m-0">Jony bristow</h5>
                                        <p class="m-0">Admin</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="align-self-end"> 10:30 AM </span>
                                    </div>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <span class="read-more">Read More <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 d-block d-lg-none">
                    <a href="blog-single.html">
                        <div class="card tour-card wow fadeIn">
                            <img class="card-img-top" src="{{ asset('frontend/img/blog/1.png') }}" alt="">
                            <span class="tour-duration">
                                <i class="fas fa-history"></i> 04 Dec </span>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <span class="align-self-start mr-3 media-icon">
                                            <img src="{{ asset('frontend/img/blog/author.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="m-0">Jony bristow</h5>
                                        <p class="m-0">Admin</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="align-self-end"> 10:30 AM </span>
                                    </div>
                                </div>
                                <h6>A good traveler has no fixed plans and is not intent on arriving.</h6>
                                <span class="read-more">Read More <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->
    <!-- start footer -->
    @include('frontend.sections.footer')
    <!-- end footer -->
    <!-- Bact to top -->
    <div class="back-top">
        <a href="#">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="video-modal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">salam</button>
                </div>

                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ScMzIvxBSi4"
                            title="YouTube video player" style="border: 0; width: 100%; height: 500px;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
