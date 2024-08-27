@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="association" route="association">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.association.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.association.scripts')
@endsection