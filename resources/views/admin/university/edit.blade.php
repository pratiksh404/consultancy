@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="university" route="university" :model="$university">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.university.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.university.scripts')
@endsection