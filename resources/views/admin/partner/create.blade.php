@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="partner" route="partner">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.partner.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.partner.scripts')
@endsection