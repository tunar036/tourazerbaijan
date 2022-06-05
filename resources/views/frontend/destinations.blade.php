@extends('layouts.frontend.master')
@section('title')
    Tour - Destinations
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
                        <h2>Destinations</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Destinations</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start destination -->
    <section class="section-spacing inverse-bg destinations">
        <div class="container">
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
                    <div class="destination-item item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/5.png') }}" alt="">
                            <div class="info-overlay">
                                <h4>Jakarta</h4>
                                <h3>Indonesia</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="destination-item item">
                        <a href="tours.html">
                            <img src="{{ asset('frontend/img/destinations/5.png') }}" alt="">
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
                            <img src="{{ asset('frontend/img/destinations/3.png') }}" alt="">
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
                            <img src="{{ asset('frontend/img/destinations/4.png') }}" alt="">
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
    <!-- start footer -->


    @include('frontend.includes.footer')
    <!-- end footer -->
    <!-- Bact to top -->
@endsection
