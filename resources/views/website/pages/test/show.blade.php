@extends('website.layouts.app')

@section('content')
    @livewire('website.course.test-profile', ['test' => $test])
@endsection
