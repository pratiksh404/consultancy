@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-edit-page name="testimonial" route="testimonial" :model="$testimonial">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.testimonial.form')
            {{-- =================================================================== --}}
        </x-slot>
        </x-admin.edit-page>
    @endsection

    @section('custom_js')
        @include('admin.layouts.modules.testimonial.scripts')
    @endsection
