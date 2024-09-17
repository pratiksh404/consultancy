<div>
    @if (!is_null(universities()))
        @if (universities()->count())
            <section class="brand pt-110 pb-90">
                <div class="container">
                    <h2 class="brand-title text-center mb-50">
                        <span><span>We're proud to work with our preferred universities</span></span>
                    </h2>
                    <div class="xb-swiper-sliders brand-slider">
                        <div class="xb-carousel-inner">
                            <div class="xb-swiper-container swiper-container">
                                <div class="xb-swiper-wrapper swiper-wrapper">
                                    @foreach (universities() as $university)
                                        @if (!is_null($university->logo))
                                            <div class="swiper-slide xb-swiper-slide">
                                                <a href="#!"><img src="{{ $university->logo }}"
                                                        alt="{{ $university->name }}"></a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif
</div>
