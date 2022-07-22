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
                        @if (isset($category))
                            <h2>{{ $category->getTranslatedAttribute('name', App::getLocale(), 'az') }}
                                {{ __('lang.of_tours') }}</h2>
                                @else
                                <h2>{{ __('lang.tours') }}</h2>
                        @endif
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">{{ __('lang.home') }} / </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.tours') }}</li>
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
        @if (count($tours) > 0)
            <div class="container">
                <div class="row align-items-center tour-bar-row">
                    <div class="col">
                        {{-- <p class="tour-bar-text">Showing 1-6 of 20 results</p> --}}
                        <h4>{{ $category->getTranslatedAttribute('name', App::getLocale(), 'az') }}
                            {{ __('lang.of_tours') }}</h4>
                    </div>
                </div>
                <div class="row" data-cues="slideInLeft">
                    @foreach ($tours as $tour)
                        @include('frontend.includes.tour')
                    @endforeach
                </div>
                <div class="row">
                    @if (count($tours) > 0)
                        <div class="pagination-wrapper">
                            {{ $tours->links() }}
                        </div>
                    @endif
                </div>
            </div>
        @else
            <h4>{{ __('lang.no_tours') }}</h4>
        @endif
    </section>

    @include('frontend.includes.footer')
@endsection
