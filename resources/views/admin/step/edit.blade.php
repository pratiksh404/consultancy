@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="step" route="step" :model="$step">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.step.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.step.scripts')
@endsection