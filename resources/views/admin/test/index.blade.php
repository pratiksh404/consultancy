@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <div style="margin-top: 12vh">
        <x-adminetic-card title="Test Panel">
            <x-slot name="content">
                @livewire('admin.test.test-panel')
            </x-slot>
        </x-adminetic-card>
    </div>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.test.scripts')
@endsection
