@extends('website.layouts.app')

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
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        @if (services()->count() > 0)
                            <div class="widget">
                                <ul class="widget-category list-unstyled">
                                    @foreach (services() as $side_menu_service)
                                        <li><a class="{{ $service->id == $side_menu_service->id ? 'active' : '' }}"
                                                href="{{ route('website.service', $side_menu_service->slug) }}">{{ $side_menu_service->name }}<span><img
                                                        src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                        alt=""></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($service->downloads->count() > 0)
                            <div class="widget">
                                <h3>Downloads</h3>
                                <ul class="widget-download ul_li_between list-unstyled">
                                    @foreach ($service->downloads as $download)
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
                        <h3>{{ $service->name }}</h3>
                        @if (!is_null($service->image))
                            <div class="single-img mt-35 mb-70">
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
                            </div>
                        @endif
                        <p>
                            {!! $service->description !!}
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
