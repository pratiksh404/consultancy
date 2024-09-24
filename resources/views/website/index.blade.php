@extends('website.layouts.app')

@section('content')
    <main>

        <!-- hero start -->
        @include('website.layouts.pages.home.hero')
        <!-- hero end -->

        <!-- Universities start -->
        <x-website.universities />
        <!-- Universities end -->

        <!-- visa type start -->
        <x-website.visas />
        <!-- visa type end -->


        <!-- visa type start -->
        <x-website.courses />
        <!-- visa type end -->


        <!-- services start -->
        <x-website.services />
        <!-- services end -->


        <!-- Steps start -->
        <x-website.steps />
        <!-- Steps end -->

        <!-- counter start -->
        <x-website.counters />
        <!-- counter end -->

        <!-- country start -->
        <x-website.countries />
        <!-- country end -->

        <!-- team start -->
        @livewire('website.team.home-team-section')
        <!-- team end -->

        <!-- testimonial start -->
        <x-website.testimonials />
        <!-- testimonial end -->

        <!-- faq start -->
        <x-website.faqs />
        <!-- faq end -->

        <!-- blog start -->
        @livewire('website.post.home-post-section')
        <!-- blog end -->

        <!-- newsletter start -->
        @livewire('website.newsletter.newsletter-subscribe')
        <!-- newsletter end -->

        <!-- contact start -->
        @livewire('website.inquiry.inquiry-form')
        <!-- contact end -->

    </main>
@endsection
