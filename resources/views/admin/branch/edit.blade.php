@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="branch" route="branch" :model="$branch">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.branch.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.branch.scripts')
@endsection