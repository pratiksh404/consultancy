@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="step" route="step">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            <div class="row">
                <div class="col-lg-5">
                    <form id="admin-form" action="{{ adminStoreRoute('step') }}" method="POST">
                        @csrf
                        @include('admin.layouts.modules.step.form')
                    </form>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body shadow-lg p-2">
                            @livewire('admin.step.step-table')
                        </div>
                    </div>
                </div>
            </div>
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.step.scripts')
@endsection
