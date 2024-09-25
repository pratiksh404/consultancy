@extends('website.layouts.app')

@section('custom_css')
    <style>
        h2 {
            font-size: 25px;
            padding-top: 12px;
        }
    </style>
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

    <section class="coaching-single pt-120 pb-130" x-data="{ menu: 'introduction' }" x-cloak>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget">
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
                <div class="col-lg-8">
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
                            {!! $course->description !!}
                        </p>
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
                        @if (steps()->count() > 0)
                            <h3>How {{ $course->name }} work</h3>
                            <ul class="about-list ul_li list-unstyled">
                                @foreach (steps() as $step)
                                    <li>
                                        <div class="xb-item--inner">
                                            <div
                                                class="xb-item--number color-{{ !$loop->first ? ($loop->iteration <= 4 ? $loop->iteration : ($loop->iteration % 4 == 1 ? 1 : $loop->iteration % 4)) : '' }}">
                                                1</div>
                                            <div class="xb-item--holder">
                                                <h3 class="xb-item--title mb-10">{{ $step->name }}</h3>
                                                <div class="xb-item--description">
                                                    {{ $step->excerpt }}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
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
