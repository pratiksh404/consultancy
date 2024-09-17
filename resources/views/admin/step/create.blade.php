@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="step" route="step">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.step.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.step.scripts')
@endsection