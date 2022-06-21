@extends('layouts.frontend.master')
@section('title')
    Tour - Tour detail
@endsection
@section('keyword')
@endsection
@section('description')
@endsection
@section('head')
@endsection
@section('content')
    <!--Preload-->

    @include('frontend.includes.header')
    <!-- end nav -->
    <section class="inner-banner" style="background-image:url({{ asset('frontend/img/banner/sub-page.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-content">
                        <h2>Tour List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tour List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start popular tours -->
    <section class="section-spacing-tours tours tours-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tour-list-details wow fadeIn">
                        <img class="card-img-top" src="{{Voyager::image($tour->image)}}" alt="">
                        <div class="tour-body">
                            <div class="tour-content">
                                <h3>{{$tour->getTranslatedAttribute('title', App::getLocale(), 'az');}}</h3>
                                <span class="tour-place">{{$tour->address->getTranslatedAttribute('name', App::getLocale(), 'az')}}</span>
                            </div>
                            <div class="h-border"></div>
                            <div class="tour-tags">
                                <span class="tour-rating">
                                    <i class="fas fa-history"></i> {{$tour->days}} days </span>
                                <span class="tour-rating t-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i> (2) </span>
                                <div class="tour-tag-btn">
                                    <span class="tour-price">{{$tour->price}}&#8380</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="tours-overview">
                        <h2 class="faq-hedar">Tur haqqında </h2>
                        <p class="tour-title"> {{$tour->getTranslatedAttribute('title', App::getLocale(), 'az');}} </p>
                    </div>
                    <p>{!! $tour->getTranslatedAttribute('text', App::getLocale(), 'az'); !!}</p>
                    {{-- <h2 class="faq-hedar">Tour Amenities</h2> --}}
                    {{-- <div class="blog-single-list">
                        <div class="list-item">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>Cruise dinner & music event
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>3 Meal per day
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>Pick and drop services
                                </li>
                            </ul>
                        </div>
                        <div class="list-item">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>Smoking allow
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>Valet parking
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>Visit 4 best places with group
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <h2 class="faq-hedar">Tour Plan</h2>
                    <div class="tour-plan-items">
                        <div class="plan-item">
                            <h3 class="plan-title">Day 1:</h3>
                            <div class="plan-content">
                                <h6>Jakarta, Indonesia</h6>
                                <span>8:00 am to 8:00 pm</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem been the industry's standard dummy text ever since the 1500s, when an unknown to printer took a galley of type and scrambled. </p>
                                <span class="tour-facilities">-Free drinks</span>
                                <span class="tour-facilities">-Awesome breakfast</span>
                                <span class="tour-facilities">-Unlimited coffee</span>
                            </div>
                        </div>
                        <div class="plan-item">
                            <h3 class="plan-title">Day 2:</h3>
                            <div class="plan-content">
                                <h6>Bangkok, Thailand</h6>
                                <span>8:00 am to 8:00 pm</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem been the industry's standard dummy text ever since the 1500s, when an unknown to printer took a galley of type and scrambled. </p>
                                <span class="tour-facilities">-Free drinks</span>
                                <span class="tour-facilities">-Awesome breakfast</span>
                                <span class="tour-facilities">-Unlimited coffee</span>
                            </div>
                        </div>
                        <div class="plan-item">
                            <h3 class="plan-title">Day 3:</h3>
                            <div class="plan-content">
                                <h6>Jakarta, Indonesia</h6>
                                <span>8:00 am to 8:00 pm</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem been the industry's standard dummy text ever since the 1500s, when an unknown to printer took a galley of type and scrambled. </p>
                                <span class="tour-facilities">-Free drinks</span>
                                <span class="tour-facilities">-Awesome breakfast</span>
                                <span class="tour-facilities">-Unlimited coffee</span>
                            </div>
                        </div>
                    </div> --}}
                    <h2 class="faq-hedar">Tour Location</h2>
                    <div class="col-12 contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3988.8270523294163!2d103.8527512!3d1.2772197!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1632647635261!5m2!1sen!2sbd" class="google-map" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <h2 class="faq-hedar">Frequently Asked Question</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> How to book the new tour for 2 persons? </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div>
                                    <p class="faq-text"> Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Why are your tours so expensive? </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div>
                                    <p class="faq-text"> Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Which payment methods are acceptable? </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div>
                                    <p class="faq-text"> Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-reply">
                        <h5>One Review</h5>
                        <div class="blog-reply-wrapper">
                            <div class="blog-reply-item">
                                <div class="blog-reply-img">
                                    <img src="{{ asset('frontend/img/blog/comment.png') }}" alt="">
                                </div>
                                <div class="blog-reply-content">
                                    <h5>David Warner</h5>
                                    <span class="reply-date">21 December, 2021</span>
                                    {{-- <span class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span> --}}
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrapper wow fadeIn">
                        <h3>Write a Review</h3>
                        {{-- <div class="form-rating">
                            <span class="rating">Rating: </span>
                            <span class="tour-rating">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div> --}}
                        <div class="contact-form">
                            <form action="{{route('review')}}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="your_name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control" id="email_address" name="email" placeholder="Enter email address">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="keyword" rows="6" name="text" placeholder="Type you keyword"></textarea>
                                </div>
                                <input type="hidden" value="{{$tour->id}}" name="tour_id">
                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="booking-bg">
                        <form class="row g-3">
                            <div class="col-sm-12">
                                <h2 class="form-hader"> Book This Tour </h2>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="tour-input">
                                    <label class="date-label">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Date from:</span>
                                    </label>
                                    <input type="text" class="form-control booking-from" id="inputAddress">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tour-input">
                                    <label class="date-label">
                                        <i class="fas fa-history"></i>
                                        <span>Time:</span>
                                    </label>
                                    <input type="text" class="form-control" id="inputAddress2">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="tour-ticket">Tickets: <span>Please, select date first</span>
                                </p>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <p class="from-text">Add Extra</p>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck"> Service per booking <span class="booking-price"> $50.00</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1"> Service per person </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="total-tour">
                                    <span class="service-price">Adult: $50</span>
                                    <span class="service-price">Youth: $55</span>
                                    <span class="service-price">Children: $ 30</span>
                                </p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <p class="total-tour">
                                    <span class="tour-total">Total:</span>
                                </p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="booking-bt btn btn-primary">Book Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 discount-offer">
                        <img src="{{ asset('frontend/img/tour/black-friday.png') }}" alt="Discount Image">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- end popular tours -->
    @include('frontend.includes.footer')
    <!-- end footer -->
    <!-- Bact to top -->
@endsection
