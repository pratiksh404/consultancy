@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="category" route="category" :model="$category">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.category.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.category.scripts')
@endsection