@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="candidate" route="candidate">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.candidate.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.candidate.scripts')
@endsection