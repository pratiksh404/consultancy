<section class="hero hero__style-one bg_img" data-background="{{ banner()->image }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="hero__content">
                    <h1 class="wow skewIn">{{ banner()->title }} <br> <span>{{ banner()->subtitle }} </span></h1>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".6s">
                        {!! banner()->short_description !!}
                    </p>
                    @if (count(banner()->features) > 0)
                        <ul class="xb-list list-unstyled mt-40 mb-60 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration=".6s">
                            @foreach (banner()->features as $feature)
                                <li><i class="far fa-check"></i>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if (isset(banner()->primary_button_link) || isset(banner()->secondary_button_link))
                        <div class="btns wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".6s">
                            @if (isset(banner()->primary_button_link) && isset(banner()->primary_button_title))
                                @if (!is_null(banner()->primary_button_link) && !is_null(banner()->primary_button_title))
                                    <a class="thm-btn"
                                        href="{{ banner()->primary_button_link }}">{{ banner()->primary_button_title }}</a>
                                @endif
                                @if (!is_null(banner()->secondary_button_link) && !is_null(banner()->secondary_button_title))
                                    <a class="thm-btn thm-btn--white"
                                        href="{{ banner()->secondary_button_link }}">{{ banner()->secondary_button_title }}</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
