@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="branch" route="branch">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.branch.branch-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.branch.scripts')
@endsection
