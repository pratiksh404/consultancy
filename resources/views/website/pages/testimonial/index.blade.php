@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Testimonials',
        ],
    ]" title="Our Testimonials" />
    @livewire('website.testimonial.testimonial-panel')
@endsection
