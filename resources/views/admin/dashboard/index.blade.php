@extends(request()->header('layout') ?? (request()->header('layout') ?? 'adminetic::admin.layouts.app'))

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="d-flex justify-content-end mb-2">
            <ul class="nav nav-pills nav-warning" id="j-pills-tab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" id="j-pills-tests-tab"
                        data-bs-toggle="pill" href="#j-pills-tests" role="tab" aria-controls="j-pills-tests"
                        aria-selected="false" tabindex="-1">Tests</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-inquiries-tab"
                        data-bs-toggle="pill" href="#j-pills-inquiries" role="tab" aria-controls="j-pills-inquiries"
                        aria-selected="false" tabindex="-1">Inquiries</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-candidates-tab"
                        data-bs-toggle="pill" href="#j-pills-candidates" role="tab" aria-controls="j-pills-candidates"
                        aria-selected="false" tabindex="-1">Candidates</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-newsletter-subscribers-tab"
                        data-bs-toggle="pill" href="#j-pills-newsletter-subscribers" role="tab"
                        aria-controls="j-pills-newsletter-subscribers" aria-selected="true">Subscribers</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-notifications-tab"
                        data-bs-toggle="pill" href="#j-pills-notifications" role="tab"
                        aria-controls="j-pills-notifications" aria-selected="true">Notifications</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-business_hour-tab"
                        data-bs-toggle="pill" href="#j-pills-business_hour" role="tab"
                        aria-controls="j-pills-business_hour" aria-selected="true">Business Hour</a></li>
                @if (env('ANALYTICS_PROPERTY_ID', false))
                    <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-google-analytics-tab"
                            data-bs-toggle="pill" href="#j-pills-google-analytics" role="tab"
                            aria-controls="j-pills-google-analytics" aria-selected="false" tabindex="-1">Analytics</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="tab-content" id="j-pills-tabContent">
            <div class="tab-pane fade show active" id="j-pills-tests" role="tabpanel" aria-labelledby="j-pills-tests-tab">
                @livewire('admin.test.test-panel')
            </div>
            <div class="tab-pane fade" id="j-pills-inquiries" role="tabpanel" aria-labelledby="j-pills-inquiries-tab">
                @livewire('admin.inquiry.inquiry-panel')
            </div>
            <div class="tab-pane fade" id="j-pills-candidates" role="tabpanel" aria-labelledby="j-pills-candidates-tab">
                <div class="card">
                    <div class="card-body shadow-lg p-2">
                        @livewire('admin.candidate.candidate-table')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="j-pills-notifications" role="tabpanel"
                aria-labelledby="j-pills-notifications-tab">
                @livewire('notify.my-notification')
            </div>
            <div class="tab-pane fade" id="j-pills-newsletter-subscribers" role="tabpanel"
                aria-labelledby="j-pills-newsletter-subscribers-tab">
                <div class="card">
                    <div class="card-body shadow-lg p-2">
                        @livewire('newsletter-subscriber-panel')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="j-pills-business_hour" role="tabpanel"
                aria-labelledby="j-pills-business_hour-tab">
                <div class="card">
                    <div class="card-body shadow-lg p-2">
                        @livewire('business-hour-panel')
                    </div>
                </div>
            </div>
            @if (env('ANALYTICS_PROPERTY_ID', false))
                <div class="tab-pane fade" id="j-pills-google-analytics" role="tabpanel"
                    aria-labelledby="j-pills-google-analytics-tab">
                    @livewire('adminetic.google-analytics')
                </div>
            @endif
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('custom_js')
    @include('admin.layouts.modules.dashboard.scripts')
@endsection
