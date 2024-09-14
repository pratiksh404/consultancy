@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-card title="Test Profile">
        <x-slot name="content">
            @livewire('admin.test.test-profile', ['test' => $test], key('profile' . $test->id))
        </x-slot>
    </x-adminetic-card>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.test.scripts')
@endsection
