@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="gallery" route="gallery" :model="$gallery">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.gallery.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.gallery.scripts')
    @endsection
