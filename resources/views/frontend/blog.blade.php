@extends('layouts.frontend.master')
@section('title')
    Tour - Blog
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
                        <h2>Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start blogs -->
    <section class="section-spacing blogs">
        <div class="container">
            <div class="row" data-cues="zoomIn">
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                <div class="col-md-6 col-lg-4 mb-4">
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
            </div>
            <div class="row">
                <div class="pagination-container">
                    <ul class="pagination justify-content-center">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-double-left"></i>
                                </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end blogs -->
    <!-- start footer -->


    @include('frontend.includes.footer')
    <!-- end footer -->
    <!-- Bact to top -->
@endsection
