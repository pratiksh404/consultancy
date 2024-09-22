@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="team" route="team">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            @livewire('admin.team.team-table')
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.team.scripts')
@endsection
