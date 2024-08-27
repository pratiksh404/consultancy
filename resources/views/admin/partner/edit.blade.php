@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="partner" route="partner" :model="$partner">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.partner.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.partner.scripts')
@endsection