@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-card title="Banner Management">
        <x-slot name="content">
            @livewire('admin.widgets.banner-management')
        </x-slot>
    </x-adminetic-card>
@endsection
