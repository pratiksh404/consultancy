@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="course" route="course" :model="$course">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.course.form')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.course.scripts')
@endsection