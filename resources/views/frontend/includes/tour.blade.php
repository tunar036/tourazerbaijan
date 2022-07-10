<div class="col-md-6 col-lg-4">
    <a href="{{ route('tour-detail', $tour->id) }}">
        <div class="card tour-card wow fadeIn">
            <img class="card-img-top" src="{{Voyager::image($tour->thumbnail('cropped'))}}" alt="">
            <span class="tour-duration">
                <i class="fas fa-history"></i> {{ $tour->days }} {{__('lang.days')}} </span>
            <div class="card-body">
                <div class="tour-tags">
                    <span class="tour-price">$ {{ $tour->price }}</span>
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