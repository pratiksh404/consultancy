@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="slider" route="slider" :model="$slider">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.slider.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.slider.scripts')
    @endsection
