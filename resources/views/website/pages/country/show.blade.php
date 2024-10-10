@extends('website.layouts.app', [
    'title' => $country->meta_name ?? $country->name,
    'description' => $country->meta_description ?? website('short_description'),
    'keywords' => $country->meta_keywords ?? website('keywords'),
])

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
        <div class="sidebar-widget">
            @if (countries()->count() > 0)
                <div class="widget" style="width: 100vw;overflow-x:auto">
                    <ul class="widget-category list-unstyled d-flex justify-content-start">
                        @foreach (countries() as $side_menu_country)
                            <li class="mx-2"><a class="{{ $country->id == $side_menu_country->id ? 'active' : '' }}"
                                    style="white-space: nowrap"
                                    href="{{ route('website.country', $side_menu_country->slug) }}">{{ $side_menu_country->name }}<span
                                        class="mx-2"><img src="{{ $side_menu_country->flag }}" alt=""></span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="container">
            <div class="single-content">
                <h3>
                    <div class="d-flex justify-content-between">
                        {{ $country->name }}
                        @if ($country->downloads->count() > 0)
                            <div x-data="{ isOpen: false }">
                                <button class="btn btn-primary" @click="isOpen = !isOpen" @keydown.escape="isOpen = false">
                                    <u>Downloads</u>
                                </button>
                                <ul x-show="isOpen" @click.away="isOpen = false"
                                    style="position: absolute;background-color: white;color: black;list-style: none;z-index: 99;width:8vw;text-align:center">
                                    @foreach ($country->downloads as $download)
                                        <li>
                                            <a href="{{ $download->getFullUrl() }}" download wire:click='isOpen = false'>
                                                <span
                                                    style="font-size: 14px;color: black;font-weight:lighter">{{ $download->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </h3>
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
            </div>
        </div>
        @if (count($country->faqs ?? []) > 0)
            <section class="faq pos-rel gray-bg-2 pt-120 pb-130">
                <div class="container">
                    <div class="row align-items-center mb-30">
                        <div class="col-lg-6 col-md-7">
                            <div class="sec-title style-2 mb-30">
                                <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                        alt="">Popular<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                        alt=""></span>
                                <h3 class="sec-title--heading">Asked Questions</h3>
                            </div>
                        </div>
                    </div>
                    <div class="xb-faq xb-faq2">
                        <ul class="accordion_box clearfix">
                            @foreach ($country->faqs as $faq)
                                @if (!is_null($faq['question']) && $faq['answer'])
                                    <li class="accordion block {{ $loop->first ? 'active-block' : '' }}">
                                        <div class="acc-btn">
                                            {!! $faq['question'] !!}
                                            <span class="arrow"></span>
                                        </div>
                                        <div class="acc_body {{ $loop->first ? 'current' : '' }}">
                                            <div class="content">
                                                <p>
                                                    {!! $faq['answer'] !!}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="faq-shape">
                    <div class="shape shape--1">
                        <div class="shape-inner" data-parallax='{"x":-50,"y":-70}'>
                            <img src="{{ asset('website/assets/img/shape/faq_shape1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="shape shape--2">
                        <div class="shape-inner" data-parallax='{"x":50,"y":-80}'>
                            <img src="{{ asset('website/assets/img/shape/faq_shape2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (count($country->counters ?? []) > 0)
            <div class="row mt-none-30 mb-80 d-flex justify-content-around">
                <h3>Why Choose Us</h3>
                @foreach ($country->counters as $counter)
                    <div class="col-lg-3 col-md-6 mt-30">
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
        @if ($country->universities->count() > 0)
            <section class="brand gray-bg-2 pos-rel pt-120 pb-120">
                <div class="container">
                    <div class="sec-title style-2 text-center mb-60">
                        <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                alt="">top
                            institutions<img src="{{ asset('website/assets/img/icon/h_star.png') }}" alt=""></span>
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
