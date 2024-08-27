@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="visa" route="visa" :model="$visa">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.visa.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.visa.scripts')
@endsection