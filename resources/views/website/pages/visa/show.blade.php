@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'VISA Services',
        ],
        [
            'name' => $visa->name,
        ],
    ]" :title="$visa->name" />

    <section class="coaching-single pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        @if (visas()->count() > 0)
                            <div class="widget">
                                <ul class="widget-category list-unstyled">
                                    @foreach (visas() as $side_menu_visa)
                                        <li><a class="{{ $visa->id == $side_menu_visa->id ? 'active' : '' }}"
                                                href="{{ route('website.visa', $side_menu_visa->slug) }}">{{ $side_menu_visa->name }}<span><img
                                                        src="{{ asset('website/assets/img/icon/arrow_up.svg') }}"
                                                        alt=""></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($visa->downloads->count() > 0)
                            <div class="widget">
                                <h3>Downloads</h3>
                                <ul class="widget-download ul_li_between list-unstyled">
                                    @foreach ($visa->downloads as $download)
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
                        <h3>{{ $visa->name }}</h3>
                        @if (!is_null($visa->thumbnail))
                            <div class="single-img mt-35 mb-70">
                                <img src="{{ asset($visa->thumbnail) }}" alt="{{ $visa->name }}">
                            </div>
                        @endif
                        <p>
                            {!! $visa->description !!}
                        </p>
                        @if (count($visa->counters ?? []) > 0)
                            <div class="row mt-none-30 mb-80 d-flex justify-content-around">
                                <h3>Why Choose Us</h3>
                                @foreach ($visa->counters as $counter)
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
                            <h3>How {{ $visa->name }} work</h3>
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
                </div>
            </div>
            @livewire('website.testimonial.testimonial-panel', [
                'testimonial_ids' => \App\Models\Admin\Testimonial::with('visa')->where('visa_id', $visa->id)->get()->pluck('id')->toArray(),
            ])
        </div>
    </section>

    <!-- newsletter start -->
    @livewire('website.newsletter.newsletter-subscribe')
    <!-- newsletter end -->

    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form', ['visa_id' => $visa->id])
    <!-- contact end -->
@endsection
