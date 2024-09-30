@extends('website.layouts.app')

@section('custom_css')
    @include('website.layouts.assets.show_page_style')
@endsection

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Contact Us',
        ],
    ]" :title="'Contact Us'" />
    <!-- contact start -->
    @livewire('website.inquiry.inquiry-form')
    <!-- contact end -->
@endsection
