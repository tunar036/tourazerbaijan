@extends('layouts.frontend.master')
@section('title')
    Tour - About
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
    <section class="section-spacing-tours tours">
        <div class="container">
            <div class="row align-items-center tour-bar-row">
                <div class="col">
                    {{-- <p class="tour-bar-text">Showing 1-6 of 20 results</p> --}}
                    @if (!empty($category))
                        <h4>{{ $category->getTranslatedAttribute('name', App::getLocale(), 'az') }}
                            {{ __('lang.of_tours') }}</h4>
                    @else
                        <h4>{{ __('lang.tours') }}</h4>
                    @endif
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="custom-select">
                        <select>
                            <option value="0">{{ __('lang.Sort') }}</option>
                            <option value="1">Date</option>
                            <option value="2">Rating</option>
                        </select>
                    </div>
                    <a href="tours-list.html" class="tour-bar-icon">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="tours.html" class="tour-bar-icon">
                        <i class="fas fa-th-large"></i>
                    </a>
                </div>
            </div>
            <div class="row" data-cues="slideInLeft">
                @foreach ($tours as $tour)
                    {{-- @dd($tour->address->getTranslatedAttribute('name', App::getLocale(), 'az')) --}}
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('tour-detail', $tour->id) }}">
                            <div class="card tour-card wow fadeIn">
                                <img class="card-img-top" src="{{ Voyager::image($tour->image) }}" alt="">
                                <span class="tour-duration">
                                    <i class="fas fa-history"></i> {{ $tour->days }} Days </span>
                                <div class="card-body">
                                    <div class="tour-tags">
                                        <span class="tour-price">From ${{ $tour->price }}</span>
                                        <span class="tour-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> </span>
                                    </div>

                                    <h6>{{ $tour->getTranslatedAttribute('title', App::getLocale(), 'az') }} </h6>
                                    <p class="mb-0">
                                        {{ $tour->address->getTranslatedAttribute('name', App::getLocale(), 'az') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

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

    @include('frontend.includes.footer')
@endsection
