@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="country" route="country" :model="$country">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.country.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.country.scripts')
@endsection