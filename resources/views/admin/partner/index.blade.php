@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <x-adminetic-index-page name="partner" route="partner">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            <div class="row">
                <div class="col-lg-5">
                    <form action="{{ adminStoreRoute('partner') }}" method="post" id="admin-form">
                        @csrf
                        @include('admin.layouts.modules.partner.form')
                    </form>
                </div>
                <div class="col-lg-7">
                    @livewire('admin.partner.partner-table')
                </div>
            </div>
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.partner.scripts')
@endsection
