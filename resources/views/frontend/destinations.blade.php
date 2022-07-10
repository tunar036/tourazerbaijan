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
                        <h2>{{__('lang.destinations')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('index')}}">{{__('lang.home')}}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('lang.destinations')}}</li>
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
                @foreach ($categories as $category)
                    <div class="col-md-6 col-12">
                        <div class="destination-item">
                            <a href="{{route('destination-detail',$category->id)}}">
                                <img src="{{Voyager::image($category->thumbnail('cropped'))}}" alt="">
                                <div class="info-overlay">
                                    <h4>{{$category->getTranslatedAttribute('name', App::getLocale(), 'az');}}</h4>
                                    <h3>{{$category->getTranslatedAttribute('title', App::getLocale(), 'az');}}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end destination -->
    <!-- start footer -->


    @include('frontend.includes.footer')
    <!-- end footer -->
    <!-- Bact to top -->
@endsection
