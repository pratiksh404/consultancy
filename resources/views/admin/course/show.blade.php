@extends(request()->header('layout') ??  request()->header('layout') ?? 'adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-show-page name="course" route="course" :model="$course">
        <x-slot name="content">
       
        </x-slot>
    </x-admin.show-page>

@endsection

@section('custom_js')
    @include('admin.layouts.modules.course.scripts')
@endsection
