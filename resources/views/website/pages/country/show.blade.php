@extends('website.layouts.app')

@section('custom_css')
    <style>
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    @include('website.layouts.assets.show_page_style')
@endsection

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Countries',
        ],
        [
            'name' => $country->name,
        ],
    ]" :title="$country->name" />
    <section class="coaching-single pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        @if (countries()->count() > 0)
                            <div class="widget">
                                <ul class="widget-category list-unstyled">
                                    @foreach (countries() as $side_menu_country)
                                        <li><a class="{{ $country->id == $side_menu_country->id ? 'active' : '' }}"
                                                href="{{ route('website.country', $side_menu_country->slug) }}">{{ $side_menu_country->name }}<span><img
                                                        src="{{ $side_menu_country->flag }}" alt=""></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($country->downloads->count() > 0)
                            <div class="widget">
                                <h3>Downloads</h3>
                                <ul class="widget-download ul_li_between list-unstyled">
                                    @foreach ($country->downloads as $download)
                                        <li>
                                            <a href="{{ $download->getFullUrl() }}" download>
                                                <div class="xb-download">
                                                    <div class="xb-item--inner">
                                                        <div class="xb-item--icon">
                                                            <img src="{{ asset('website/assets/img/icon/pdf.svg') }}"
                                                                alt="">
                                                        </div>
                                                        <h4 class="xb-item--title">{{ $download->name }}</h4>
                                                        <div class="xb-item--size">
                                                            {{ $download->human_readable_size }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- <div class="widget widget-banner text-center bg_img" data-background="assets/img/bg/b_bg.jpg">
                                <img class="mb-40" src="assets/img/icon/b_icon.png" alt="">
                                <h4>Assured Approval – <br> Guaranteed</h4>
                                <a class="thm-btn" href="contact.html">Get in Touch</a>
                            </div> --}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-content">
                        <h3>{{ $country->name }}</h3>
                        @if ($country->getMedia('images')->count() > 0)
                            <div class="swiper mySwiper" style="width: 100%;overflow:hidden">
                                <div class="swiper-wrapper">
                                    @foreach ($country->getMedia('images') as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ $image->getUrl() }}" class="img-fluid"
                                                alt="{{ $country->name . ' photos ' . $loop->iteration }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @endif
                        <p>
                            {!! $country->description !!}
                        </p>
                        @if (count($country->counters ?? []) > 0)
                            <div class="row mt-none-30 mb-80 d-flex justify-content-around mt-20">
                                <h3>Why Choose Us</h3>
                                @foreach ($country->counters as $counter)
                                    <div class="col-lg-3 col-md-6 mt-10">
                                        <div
                                            class="team-skills style-{{ !$loop->first ? ($loop->iteration <= 4 ? $loop->iteration : ($loop->iteration % 4 == 1 ? 1 : $loop->iteration % 4)) : '' }}">
                                            <div class="xb-item--inner">
                                                <h5 class="xb-item--number" style="font-size: 40px"><span class="xbo"
                                                        data-count="{{ $counter['count'] }}">00</span><span
                                                        class="suffix">{{ $counter['suffix'] }}</span></h5>
                                                <h4 class="xb-item--title" style="top:6px">{{ $counter['name'] }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @if ($country->universities->count() > 0)
                <section class="brand gray-bg-2 pos-rel pt-120 pb-120">
                    <div class="container">
                        <div class="sec-title style-2 text-center mb-60">
                            <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                    alt="">top
                                institutions<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                    alt=""></span>
                        </div>
                        <div class="xb-brand xb-brand1 ul_li">
                            @foreach ($country->universities as $university)
                                <div class="xb-item--item">
                                    <a class="xb-item--inner" href="{{ $university->url ?? '#' }}"><img
                                            src="{{ $university->logo }}" alt="{{ $university->name }}"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="brand-shape">
                        <div class="shape shape--1">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:-70}"
                                style="transform:translate3d(-23.439px, -32.815px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-23.439px, -32.815px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                <img src="{{ asset('website/assets/img/shape/b_shape1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="shape shape--2">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:80}"
                                style="transform:translate3d(17.795px, 28.455px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(17.795px, 28.455px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                <img src="{{ asset('website/assets/img/shape/b_shape2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @livewire('website.testimonial.testimonial-panel', [
                'testimonial_ids' => \App\Models\Admin\Testimonial::with('country')->where('country_id', $country->id)->get()->pluck('id')->toArray(),
            ])
        </div>
    </section>

    <!-- newsletter start -->
    @livewire('website.newsletter.newsletter-subscribe')
    <!-- newsletter end -->

    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form', ['country_id' => $country->id])
    <!-- contact end -->
@endsection

@section('custom_js')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
