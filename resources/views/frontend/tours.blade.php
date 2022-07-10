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
                        <h2>{{__('lang.tours')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('index')}}">{{__('lang.home')}} / </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('lang.tours')}}</li>
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
                {{-- <div class="col d-flex justify-content-end">
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
                </div> --}}
            </div>
            <div class="row" data-cues="slideInLeft">
                @foreach ($tours as $tour)
                    @include('frontend.includes.tour')
                @endforeach
            </div>
            <div class="row">
                @if ($tours->hasPages())
                    <div class="pagination-wrapper">
                        {{ $tours->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include('frontend.includes.footer')
@endsection
