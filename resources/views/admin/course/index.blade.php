@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="course" route="course">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.course.course-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.course.scripts')
@endsection
