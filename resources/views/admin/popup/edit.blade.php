@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="popup" route="popup" :model="$popup">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.popup.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.popup.scripts')
    @endsection
