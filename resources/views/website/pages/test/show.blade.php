@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => $test->course->name,
            'route' => route('website.course', $test->course->slug),
        ],
        [
            'name' => $test->name . ' ( ' . toBS(\Carbon\Carbon::create($test->test_date)) . ' )',
        ],
    ]" :title="$test->name" />
    @livewire('website.course.test-profile', ['test' => $test])
@endsection
