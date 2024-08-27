@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="category" route="category">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.category.category-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.category.scripts')
@endsection
