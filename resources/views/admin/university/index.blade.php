@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="university" route="university">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.university.university-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.university.scripts')
@endsection
