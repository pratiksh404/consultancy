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
    <div class="container mt-3 p-5">
        {!! $page->description !!}
    </div>
@endsection
