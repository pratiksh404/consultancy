<div>
    @if (countries()->count() > 0)
        <section class="country pt-120 pb-120">
            <div class="container">
                <div class="sec-title style-2 text-center mb-55">
                    <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                            alt="">countries<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                            alt=""></span>
                    <h3 class="sec-title--heading">Best Countries to Study <br> Abroad</h3>
                </div>
                <div class="xb-country-slide swiper-container">
                    <div class="swiper-wrapper">
                        @foreach (countries() as $country)
                            @if (!is_null($country->image))
                                <div class="swiper-slide xb-swiper-slide">
                                    <div class="xb-country2">
                                        <div class="xb-item--inner text-center">
                                            <div class="xb-item--flag mb-20">
                                                <img src="{{ $country->image }}" alt="{{ $country->name }}">
                                            </div>
                                            <h3 class="xb-item--title">{{ $country->name }}</h3>
                                            <a class="xb-item--link" href="country-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
