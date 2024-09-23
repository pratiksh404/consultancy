@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Services',
        ],
    ]" title="Our Services" />

    @if (services()->count() > 0)
        <!-- services start -->
        <section class="service service-bottom-pb pos-rel black-bg pt-120">
            <div class="container">
                <div class="xb-service__top ul_li_between mb-20">
                    <div class="sec-title sec-title--white style-2 mb-20">
                        <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                alt="">services<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                alt=""></span>
                        <h3 class="sec-title--heading">Easy Study Abroad</h3>
                    </div>
                </div>
                <div class="xb-service2__wrap ul_li">
                    @foreach (services() as $service)
                        <div class="xb-service2">
                            <div class="xb-item--inner">
                                <div class="xb-item--icon">
                                    <img src="{{ $service->icon_image }}" alt="{{ $service->name }}">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title"><a
                                            href="{{ route('website.service', ['service' => $service->slug]) }}">{{ $service->name }}</a>
                                    </h3>
                                    <p class="xb-item--content">{{ $service->excerpt }}
                                    </p>
                                    <a class="xb-item--link"
                                        href="{{ route('website.service', ['service' => $service->slug]) }}">Read
                                        more</a>
                                </div>
                                <a class="xb-item--link-full"
                                    href="{{ route('website.service', ['service' => $service->slug]) }}"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="service-shape">
                <div class="shape shape--1">
                    <div class="shape-inner" data-parallax='{"x":-50,"y":-70}'>
                        <img src="{{ asset('website/assets/img/shape/s_shape1.png') }}" alt="">
                    </div>
                </div>
                <div class="shape shape--2">
                    <div class="shape-inner" data-parallax='{"x":50,"y":-80}'>
                        <img src="{{ asset('website/assets/img/shape/s_shape2.png') }}" alt="">
                    </div>
                </div>
                <div class="shape shape--3">
                    <div class="shape-inner" data-parallax='{"x":-50,"y":80}'>
                        <img src="{{ asset('website/assets/img/shape/s_shape3.png') }}" alt="">
                    </div>
                </div>
                <div class="shape shape--4">
                    <div class="shape-inner" data-parallax='{"x":50,"y":80}'>
                        <img src="{{ asset('website/assets/img/shape/s_shape4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- services end -->
        <!-- cta start -->
        <section class="cta mb-70">
            <div class="container">
                <div class="xb-cta__wrap pos-rel bg_img"
                    data-background="{{ asset('website/assets/img/bg/cta_shape.png') }}">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="xb-cta">
                                <div class="sec-title sec-title--white style-2 mb-20">
                                    <span class="sec-title--sub"><img
                                            src="{{ asset('website/assets/img/icon/h_star.png') }}" alt="">Free
                                        Visa<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                            alt=""></span>
                                    <h3 class="sec-title--heading">Students and Experts Love Us <br> 100% Success Rate
                                    </h3>
                                </div>
                                <a class="xb-tran-btn" href="{{ route('website.home') . '#inquiry' }}">apply
                                    today<span><img src="{{ asset('website/assets/img/icon/arrow_right.svg') }}"
                                            alt=""></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="xb-cta__img" data-background="{{ asset('website/assets/img/bg/cta_img.jpg') }}">
                    </div>
                </div>
            </div>
        </section>
        <!-- cta end -->
    @endif
@endsection
