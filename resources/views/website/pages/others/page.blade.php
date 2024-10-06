@extends('website.layouts.app')

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
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        @if ($page->subPages()->count() > 0)
                            <div class="widget">
                                <ul class="widget-category list-unstyled">
                                    @foreach ($page->subPages() as $sub_page)
                                        <li><a href="{{ route('website.page.sub-page', [$page->slug, $sub_page->slug]) }}">{{ $sub_page->name }}<span><img
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
                <div class="col-lg-8">
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
                        <p>
                            {!! $page->description !!}
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- newsletter start -->
    @livewire('website.newsletter.newsletter-subscribe')
    <!-- newsletter end -->

    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form')
    <!-- contact end -->
@endsection
