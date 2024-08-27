@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="course" route="course">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.course.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.course.scripts')
@endsection