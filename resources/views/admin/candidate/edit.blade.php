@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="candidate" route="candidate" :model="$candidate">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.candidate.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.candidate.scripts')
@endsection