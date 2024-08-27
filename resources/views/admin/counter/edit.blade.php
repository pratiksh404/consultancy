@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="counter" route="counter" :model="$counter">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.counter.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.counter.scripts')
    @endsection
