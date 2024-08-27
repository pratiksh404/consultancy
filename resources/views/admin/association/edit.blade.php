@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="association" route="association" :model="$association">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.association.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.association.scripts')
@endsection