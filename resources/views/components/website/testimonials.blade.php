<div>
    @if (testimonials()->count() > 0)
        <section class="testimonial bg_img pt-130 pb-130" data-bg-color="#EDF3F5"
            data-background="assets/img/bg/tm_bg.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="sec-title margin-none-md mb-30-xs mb-125">
                            <h2 class="mb-70 wow skewIn">Happy Clients Reflect on Their <br>
                                <span> Journey with Us</span>
                            </h2>
                            <p>Embark on a Global Exploration: <br> Experience Joy in 190+ Countries <br> and Across
                                the
                                World</p>
                        </div>
                        <div class="xb-testimonial__nav ul_li">
                            <div class="tm-nav-item tm-button-prev"></div>
                            <div class="tm-nav-item tm-button-next"></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="xb-swiper-sliders">
                            <div class="xb-carousel-inner">
                                <div class="xb-testimonial-slider xb-swiper-container swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach (testimonials() as $testimonial)
                                            <div class="swiper-slide xb-swiper-slide">
                                                <a
                                                    href="{{ route('website.testimonial', ['testimonial' => $testimonial->id]) }}">
                                                    <div class="xb-testimonial">
                                                        <div class="xb-item--inner text-center">
                                                            <div class="xb-item--img">
                                                                <img src="{{ $testimonial->image }}"
                                                                    alt="{{ $testimonial->name }}">
                                                            </div>
                                                            <div class="xb-item--content">
                                                                <p class="testimonial-content">
                                                                    {!! $testimonial->message !!}
                                                                </p>
                                                            </div>
                                                            <div class="xb-item--bottom">
                                                                <div class="xb-item--ratting">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        <i
                                                                            class="text-warning fa fa-{{ $i <= $testimonial->rating ? 'star' : 'star-o' }}"></i>
                                                                    @endfor
                                                                </div>
                                                                <h3 class="xb-item--title">{{ $testimonial->name }}</h3>
                                                                @if (!is_null($testimonial->country))
                                                                    <h5 class="xb-item--title">
                                                                        {{ $testimonial->country->name }}</h5>
                                                                @endif
                                                                @if (!is_null($testimonial->visa))
                                                                    <h5 class="xb-item--title">
                                                                        {{ $testimonial->visa->name }}</h5>
                                                                @endif
                                                                @if (!is_null($testimonial->course))
                                                                    <h5 class="xb-item--title">
                                                                        {{ $testimonial->course->name }}</h5>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
