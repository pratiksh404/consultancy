<div>
    <div class="container-fluid" x-data="{ createTestPanel: false }" x-cloak>
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <button type="button" class="btn btn-light btn-air-light" @click="createTestPanel = true"
                                style="width:100%;height:90%;">
                                <i class="fa fa-plus text-muted" style="font-size: 30px"></i></button>
                        </div>
                        @foreach ($tests as $test)
                            <div class="col-xxl-4 col-md-6">
                                @livewire('admin.test.test-card', ['test' => $test], key($test->id))
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @livewire('admin.test.test-form')
    </div>
    @push('livewire_third_party')
        {{-- Test Form Scripts --}}
        @include('admin.layouts.modules.test.scripts.test_form_livewire_script')
    @endpush
</div>
