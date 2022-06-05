<nav class="navbar navbar-expand-lg {{ (Request::is('/')) ? 'primary-bg' : 'white-bg' }}">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            {{-- <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo"> --}}
            <img 
            src="
            @if(Request::is('/'))
            {{ asset('frontend/img/logo.png') }}
            @else
            {{ asset('frontend/img/logo-colored.png') }}
            @endif
            " alt="Logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tours')}}">Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('destinations')}}">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
            </ul>
            <div class="booking-button">
                <a href="booking.html" class="btn btn-primary btn-white">Booking Now</a>
            </div>
        </div>
    </div>
</nav>