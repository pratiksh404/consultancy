@extends('website.layouts.app', [
    'title' => $page->meta_name ?? $page->name,
    'description' => $page->meta_description ?? website('short_description'),
    'keywords' => $page->meta_keywords ?? website('keywords'),
    'image' => $page->thumbnail,
])

@section('custom_css')
    @include('website.layouts.assets.show_page_style')
@endsection

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => $page->name,
        ],
    ]" :title="$page->name" />

    <section class="coaching-single pt-120 pb-130" x-data="{ menu: 'introduction' }" x-cloak>
        <div class="container">
            <div class="row">
                @if ($page->subPages()->count() > 0 || $page->downloads->count() > 0)
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            @if ($page->subPages()->count() > 0)
                                <div class="widget">
                                    <ul class="widget-category list-unstyled">
                                        @foreach ($page->subPages() as $sub_page)
                                            <li><a
                                                    href="{{ route('website.page.sub-page', [$page->slug, $sub_page->slug]) }}">{{ $sub_page->name }}<span><img
                                                            src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                            alt=""></span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($page->downloads->count() > 0)
                                <div class="widget">
                                    <h3>Downloads</h3>
                                    <ul class="widget-download ul_li_between list-unstyled">
                                        @foreach ($page->downloads as $download)
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
                @endif
                <div class="col-lg-{{ $page->subPages()->count() > 0 || $page->downloads->count() > 0 ? 8 : 12 }}">
                    {{-- Introduction --}}
                    <div class="single-content" x-show="menu == 'introduction'">
                        <h3>{{ $page->name }}</h3>
                        @if ($page->getMedia('images')->count() > 0)
                            <div class="swiper mySwiper" style="width: 100%;overflow:hidden">
                                <div class="swiper-wrapper">
                                    @foreach ($page->getMedia('images') as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ $image->getUrl() }}" class="img-fluid"
                                                alt="{{ $page->name . ' photos ' . $loop->iteration }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @endif
                        @if (view()->exists('website.pages.page.custom.' . $page->slug))
                            @include('website.pages.page.custom.' . $page->slug)
                        @else
                            {!! $page->description !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if (count($page->faqs ?? []) > 0)
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
                            @foreach ($page->faqs as $faq)
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
        @if (count($page->counters ?? []) > 0)
            <div class="row mt-none-30 mb-80 d-flex justify-content-around">
                <h3>Why Choose Us</h3>
                @foreach ($page->counters as $counter)
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
