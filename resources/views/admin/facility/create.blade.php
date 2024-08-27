@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-create-page name="facility" route="facility">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.facility.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.create-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.facility.scripts')
    @endsection
