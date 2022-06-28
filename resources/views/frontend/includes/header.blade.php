<nav class="navbar navbar-expand-lg {{ Request::is('/') ? 'primary-bg' : 'white-bg' }}">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            {{-- <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo"> --}}
            <img src="
            @if (Request::is('/')) {{ asset('frontend/img/logo.png') }}
            @else
            {{ asset('frontend/img/logo-colored.png') }} @endif
            " alt="Logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item {{Request::is('/')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('index') }}">{{ __('lang.home') }}</a>
                </li>
                <li class="nav-item {{Request::is('about-us')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('lang.about') }}</a>
                </li>
                <li class="nav-item {{Request::is('tours')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('tours') }}">{{ __('lang.tours') }}</a>
                </li>
                <li class="nav-item {{Request::is('destinations')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('destinations') }}">{{ __('lang.destinations') }}</a>
                </li>
                <li class="nav-item {{Request::is('blog')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('blog') }}">{{ __('lang.blog') }}</a>
                </li>
                <li class="nav-item {{Request::is('contact-us')  ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('contact') }}">{{ __('lang.contact') }}</a>
                </li>
            </ul>
            {{-- <div class="booking-button">
                <a href="booking.html" class="btn btn-primary btn-white">Booking Now</a>
            </div> --}}
                <ul>
                    <li ><a @if(Session('locale') == 'en') style="color:#029E9D;" @endif href="{{ url('/locale/en') }}">en</a></li>
                    <li><a @if(Session('locale') == 'az') style="color:#029E9D;" @endif href="{{ url('/locale/az') }}">az</a></li>
                </ul>
        </div>
    </div>
</nav>
