@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Blogs, Articles and News',
        ],
    ]" title="Our Blogs, Articles and News" />
    @livewire('website.post.post-panel', ['query' => $query])
@endsection
