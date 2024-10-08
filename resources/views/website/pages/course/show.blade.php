@extends('website.layouts.app', [
    'title' => $course->meta_name ?? $course->name,
    'description' => $course->meta_description ?? website('short_description'),
    'keywords' => $course->meta_keywords ?? website('keywords'),
    'image' => $course->thumbnail,
])

@section('schema_org')
    {!! $course->searchSchema() !!}
@endsection

@section('custom_css')
    @include('website.layouts.assets.show_page_style')
@endsection

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Course Services',
        ],
        [
            'name' => $course->name,
        ],
    ]" :title="$course->name" />

    <section class="about pos-rel pt-120">
        <div class="container">
            <div class="sec-title sec-title--big style-2">
                <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}" alt="">We
                    Provde<img src="{{ asset('website/assets/img/icon/h_star.png') }}" alt=""></span>
                <h3 class="sec-title--heading mb-5">{{ $course->name }} <br> Classes and Mock Tests
                </h3>
                <p>{{ $course->excerpt }}</p>
            </div>
        </div>
        <div class="about-shape">
            <div class="shape shape--1">
                <div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:-80}"
                    style="transform:translate3d(-23.829px, -38.127px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-23.829px, -38.127px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="{{ asset('website/assets/img/shape/a_shape1.png') }}" alt="">
                </div>
            </div>
            <div class="shape shape--2">
                <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:-80}"
                    style="transform:translate3d(23.859px, -38.127px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(23.859px, -38.127px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img src="{{ asset('website/assets/img/shape/a_shape2.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="coaching-single pt-20 pb-130" x-data="{ menu: 'introduction' }" x-cloak>
        <div class="container">
            <div class="row">
                @if (courses()->count() > 0 || $course->downloads->count() > 0)
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <img src="{{ asset('website/assets/img/about/about_img2.png') }}" alt="">
                            <div class="widget">
                                <ul class="widget-category list-unstyled">

                                    <li><button @click="menu = 'introduction'" :class="{ 'active': menu == 'introduction' }"
                                            style="width: 100%">Introduction<span><img
                                                    src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                    alt=""></span></button></li>
                                    <li><button @click="menu = 'tests'" :class="{ 'active': menu == 'tests' }"
                                            style="width: 100%">Mock Tests<span><img
                                                    src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                    alt=""></span></button></li>
                                </ul>
                            </div>
                            @if (courses()->count() > 0)
                                <div class="widget">
                                    <ul class="widget-category list-unstyled">
                                        @foreach (courses() as $side_menu_course)
                                            <li><a class="{{ $course->id == $side_menu_course->id ? 'active' : '' }}"
                                                    href="{{ route('website.course', $side_menu_course->slug) }}">{{ $side_menu_course->name }}<span><img
                                                            src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                            alt=""></span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($course->downloads->count() > 0)
                                <div class="widget">
                                    <h3>Downloads</h3>
                                    <ul class="widget-download ul_li_between list-unstyled">
                                        @foreach ($course->downloads as $download)
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
                <div class="col-lg-{{ courses()->count() > 0 || $course->downloads->count() > 0 ? 8 : 12 }}">
                    {{-- Introduction --}}
                    <div class="single-content" x-show="menu == 'introduction'">
                        <h3>{{ $course->name }}</h3>
                        @if ($course->getMedia('images')->count() > 0)
                            <div class="swiper mySwiper" style="width: 100%;overflow:hidden">
                                <div class="swiper-wrapper">
                                    @foreach ($course->getMedia('images') as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ $image->getUrl() }}" class="img-fluid"
                                                alt="{{ $course->name . ' photos ' . $loop->iteration }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @endif
                        <p>
                            @if (view()->exists('website.pages.course.custom.' . $course->slug))
                                @include('website.pages.course.custom.' . $course->slug)
                            @else
                                {!! $course->description !!}
                            @endif
                        </p>
                        @if (count($course->faqs ?? []) > 0)
                            <section class="faq pos-rel gray-bg-2 pt-120 pb-130">
                                <div class="container">
                                    <div class="row align-items-center mb-30">
                                        <div class="col-lg-6 col-md-7">
                                            <div class="sec-title style-2 mb-30">
                                                <span class="sec-title--sub"><img
                                                        src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                                        alt="">Popular<img
                                                        src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                                        alt=""></span>
                                                <h3 class="sec-title--heading">Asked Questions</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xb-faq xb-faq2">
                                        <ul class="accordion_box clearfix">
                                            @foreach ($course->faqs as $faq)
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
                                            <img src="{{ asset('website/assets/img/shape/faq_shape1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="shape shape--2">
                                        <div class="shape-inner" data-parallax='{"x":50,"y":-80}'>
                                            <img src="{{ asset('website/assets/img/shape/faq_shape2.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                        @if (count($course->counters ?? []) > 0)
                            <div class="row mt-none-30 mb-80 d-flex justify-content-around">
                                <h3>Why Choose Us</h3>
                                @foreach ($course->counters as $counter)
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
                    </div>
                    <div class="single-content" x-show="menu == 'tests'">

                        @livewire('website.course.course-mock-test', ['course' => $course])

                    </div>
                </div>
            </div>
            @livewire('website.testimonial.testimonial-panel', [
                'testimonial_ids' => \App\Models\Admin\Testimonial::with('course')->where('course_id', $course->id)->get()->pluck('id')->toArray(),
            ])
        </div>
    </section>

    <!-- newsletter start -->
    @livewire('website.newsletter.newsletter-subscribe')
    <!-- newsletter end -->

    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form', ['course_id' => $course->id])
    <!-- contact end -->
@endsection
