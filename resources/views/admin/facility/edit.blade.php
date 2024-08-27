@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="facility" route="facility" :model="$facility">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.facility.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.facility.scripts')
    @endsection
