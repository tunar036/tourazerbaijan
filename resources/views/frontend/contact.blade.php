@extends('layouts.frontend.master')
@section('title')
    Tour - Contact Us
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
                        <h2>{{__('lang.contact')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('index')}}">{{__('lang.home')}}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('lang.contact')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start contact -->
    <section class="section-spacing contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <a href="#">
                                <i class="far fa-envelope"></i>
                            </a>
                            <p class="contact-text">{{__('lang.email')}}: </p>
                        </div>
                        <div class="h-border"></div>
                        <div class="contact-sub-text">
                            <p>
                                <a href="mailto:{{$email}}">{{$email}}</a>
                            </p>
                      
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <a href="#">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <p class="contact-text">{{__('lang.phone')}}: </p>
                        </div>
                        <div class="h-border"></div>
                        <div class="contact-sub-text">
                            <p>
                                <a href="tel:{{$phone1}}">{{$phone1}}</a>
                            </p>
                            <p>
                                <a href="tel:{{$phone2}}">{{$phone2}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center contact-content">
                <div class="col-md-5 contact-img">
                    <img class="tilt-img" src="{{ asset('frontend/img/contact/contact-img.png') }}" alt="img">
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="mb-4">
                                <input type="text" class="form-control" id="your_name" placeholder="{{__('lang.enter_your_name')}}">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control" id="email_address" placeholder="{{__('lang.enter_your_email')}}">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="keyword" rows="6" placeholder="Type you keyword"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3988.8270523294163!2d103.8527512!3d1.2772197!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1632647635261!5m2!1sen!2sbd" class="google-map" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div> --}}
    </section>
    <!-- end contact -->
    
    
    @include('frontend.includes.footer')
    <!-- end footer -->
    <!-- Bact to top -->
@endsection
