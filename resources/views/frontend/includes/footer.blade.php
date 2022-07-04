<footer>
    <div class="footer-top">
        <div class="container">
            {{-- <div class="row" data-cues="slideInUp">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="footer-widget">
                        <h5>Top destination</h5>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a
                                        href="{{ route('destination-detail', $category->id) }}">{{ $category->getTranslatedAttribute('name', App::getLocale(), 'az') }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="footer-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li>
                                <a href="about-us.html">About</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                            <li>
                                <a href="tours.html">Tours</a>
                            </li>
                            <li>
                                <a href="booking.html">Booking</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="row mt-5">
                <div class="col-md-8 col-lg-9">
                    <div class="footer-left">
                        <img style="width: 80px;height:80px;" src="{{ asset('frontend/img/tour.png') }}" alt="Logo">
                        <div class="h-border"></div>
                        <div class="copyright">
                            <p>© {{ date('Y') }} All Right Reserved by TOURSAZERBAIJAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <ul class="team-social footer-social">
                        <li class="share-icon">
                            <a href="{{ $facebook }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="share-icon">
                            <a href="{{ $instagram }}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        {{-- <li class="share-icon">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="share-icon">
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="share-icon">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-top">
    <a href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="video-modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">salam</button>
            </div>

            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ScMzIvxBSi4"
                        title="YouTube video player" style="border: 0; width: 100%; height: 500px;"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
