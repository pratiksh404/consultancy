@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="test" route="test" :model="$test">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.test.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.test.scripts')
@endsection