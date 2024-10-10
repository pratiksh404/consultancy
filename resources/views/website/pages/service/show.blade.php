@extends('website.layouts.app', [
    'title' => $service->meta_name ?? $service->name,
    'description' => $service->meta_description ?? website('short_description'),
    'keywords' => $service->meta_keywords ?? website('keywords'),
    'image' => $service->thumbnail,
])

@section('schema_org')
    {!! $service->searchSchema() !!}
@endsection

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

        /* Headings */
        h2 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        h3 {
            color: #555;
            font-size: 1.5em;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        /* Paragraph Styles */
        p {
            color: #666;
            font-size: 1em;
            margin-bottom: 15px;
        }

        /* List Styles */
        ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        li {
            margin-bottom: 10px;
        }

        /* Ordered List Styles */
        ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        /* Strong Text */
        strong {
            color: #333;
        }

        /* Call to Action Styles */
        .service-details h3:last-of-type {
            margin-top: 30px;
        }

        .service-details p:last-of-type {
            font-weight: bold;
            font-size: 1.1em;
            color: #333;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .service {
                padding: 15px;
            }

            h2 {
                font-size: 1.5em;
            }

            h3 {
                font-size: 1.3em;
            }

            p,
            li {
                font-size: 0.9em;
            }
        }
    </style>
@endsection

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Services',
        ],
        [
            'name' => $service->name,
        ],
    ]" :title="$service->name" />

    <section class="coaching-single pt-120 pb-130">
        <div class="sidebar-widget">
            @if (services()->count() > 0)
                <div class="swiper service-menu">
                    <div class="swiper-wrapper">
                        @foreach (services() as $side_menu_service)
                            <div class="swiper-slide">
                                <div
                                    style="
    padding: 5px 19px;
    border: 1px solid var(--color-border);
    border-radius: 5px;">

                                    <a class="{{ $service->id == $side_menu_service->id ? 'active' : '' }}"
                                        style="white-space: nowrap"
                                        href="{{ route('website.service', $side_menu_service->slug) }}">
                                        <div class=" p-4">
                                            {{ $side_menu_service->name }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            @endif
        </div>
        <div class="container">
            <div class="single-content">
                <h3>
                    <div class="d-flex justify-content-between">
                        {{ $service->name }}
                        @if ($service->downloads->count() > 0)
                            <div x-data="{ isOpen: false }">
                                <button class="btn btn-primary" @click="isOpen = !isOpen" @keydown.escape="isOpen = false">
                                    <u>Downloads</u>
                                </button>
                                <ul x-show="isOpen" @click.away="isOpen = false"
                                    style="position: absolute;background-color: white;color: black;list-style: none;z-index: 99;width:8vw;text-align:center">
                                    @foreach ($service->downloads as $download)
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
                @if ($service->getMedia('images')->count() > 0)
                    <div class="swiper mySwiper" style="width: 100%;overflow:hidden">
                        <div class="swiper-wrapper">
                            @foreach ($service->getMedia('images') as $image)
                                <div class="swiper-slide">
                                    <img src="{{ $image->getUrl() }}" class="img-fluid"
                                        alt="{{ $service->name . ' photos ' . $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                @elseif (!is_null($service->image))
                    <div class="single-img mt-35 mb-70">
                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
                    </div>
                @endif
                <p>
                    {!! $service->description !!}
                </p>
            </div>
        </div>
        @if (count($service->faqs ?? []) > 0)
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
                            @foreach ($service->faqs as $faq)
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
        @if (count($service->counters ?? []) > 0)
            <div class="row mt-none-30 mb-80 d-flex justify-content-around">
                <h3>Why Choose Us</h3>
                @foreach ($service->counters as $counter)
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
    </section>

    <!-- newsletter start -->
    @livewire('website.newsletter.newsletter-subscribe')
    <!-- newsletter end -->

    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form')
    <!-- contact end -->
@endsection

@section('custom_js')
    <script>
        var swiper = new Swiper(".service-menu", {
            slidesPerView: 6,
            loop: true,
            spaceBetween: 3,
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
