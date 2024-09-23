@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="visa" route="visa">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.visa.visa-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.visa.scripts')
@endsection
