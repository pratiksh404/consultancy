@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="test" route="test">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.test.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.test.scripts')
@endsection