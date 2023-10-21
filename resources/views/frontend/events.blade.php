<section id="events" class="events">
    <div class="container">

        <div class="section-title">
            <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
            <div class="swiper-wrapper">

                @foreach ($events as $event)
                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{ asset('frontend/assets/img/' . $event->image) }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>{{ $event->title }}</h3>
                                <div class="price">
                                    <p><span>${{ $event->price }}</span></p>
                                </div>
                                <p class="fst-italic">
                                    {{ $event->description }}
                                </p>

                                <ul>

                                    @if ($event->advan1)
                                        <li><i class="bi bi-check-circle"></i> {{ $event->advan1 }}</li>
                                    @endif

                                    @if ($event->advan2)
                                        <li><i class="bi bi-check-circle"></i> {{ $event->advan2 }}</li>
                                    @endif

                                    @if ($event->advan3)
                                        <li><i class="bi bi-check-circle"></i> {{ $event->advan3 }}</li>
                                    @endif

                                    @if ($event->advan4)
                                    <li><i class="bi bi-check-circle"></i> {{ $event->advan4 }}</li>
                                    @endif

                                </ul>

                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Events Section -->
