@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="country" route="country">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.country.country-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.country.scripts')
@endsection
