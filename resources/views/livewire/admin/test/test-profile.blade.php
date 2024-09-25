<div>
    <div class="row" x-data="{
        addCandidate: false,
        openCandidateReport: null,
        printableCandidateIdsReportCard: [],
        toggleCheckAllCandidatesReportCardPrint(event) {
            this.printableCandidateIdsReportCard = event.target.checked ? @json(collect($test->marks)->pluck('candidate.id')->toArray()) : [];
        }
    }" x-init="Livewire.on('candidateAdded', () => { addCandidate = false });
    @this.on('printTestContent', (content) => {
        const iframe = document.getElementById('printFrame');
    
        // Write HTML content to iframe
        const doc = iframe.contentDocument || iframe.contentWindow.document;
        doc.open();
        doc.write(content);
        doc.close();
    
        // Print the content of the iframe
        iframe.onload = function() {
            iframe.contentWindow.print();
        };
    });" x-cloak>
        <!-- Hidden iframe for printing -->
        <iframe id="printFrame" style="display:none;"></iframe>
        <div class="col-lg-3">
            <div class="card o-hidden welcome-card" style="background-image: url({{ asset('adminetic/static/bg.jpg') }})">
                <div class="card-body">
                    @if (!\Carbon\Carbon::create($test->test_date)->isPast())
                        <div x-data="{
                            countdown: null,
                            remainingTime: 0,
                            days: 0,
                            hours: 0,
                            minutes: 0,
                            seconds: 0,
                            init() {
                                this.remainingTime = this.calculateRemainingTime();
                        
                                this.updateTimeUnits();
                        
                                this.countdown = setInterval(() => {
                                    this.remainingTime--;
                        
                                    this.updateTimeUnits();
                        
                                    if (this.remainingTime <= 0) {
                                        clearInterval(this.countdown);
                                    }
                                }, 1000);
                            },
                            calculateRemainingTime() {
                                let now = new Date().getTime();
                                let endTime = new Date('{{ \Carbon\Carbon::create($test->test_date) }}').getTime();
                        
                                return Math.floor((endTime - now) / 1000);
                            },
                            updateTimeUnits() {
                                this.days = Math.floor(this.remainingTime / (60 * 60 * 24));
                                this.hours = Math.floor((this.remainingTime % (60 * 60 * 24)) / (60 * 60));
                                this.minutes = Math.floor((this.remainingTime % (60 * 60)) / 60);
                                this.seconds = this.remainingTime % 60;
                            }
                        }">
                            <div>
                                <span x-text="days"></span> days
                                <span x-text="hours"></span> hours
                                <span x-text="minutes"></span> minutes
                                <span x-text="seconds"></span> seconds remaining
                            </div>
                        </div>
                        <br>
                    @endif
                    <h3>{{ toBS(\Carbon\Carbon::create($test->test_date)) }}</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-body shadow-lg p-2">
                    <img src="{{ $test->course->thumbnail }}" alt="{{ $test->course->thumbnail }}" class="img-fluid">
                </div>
            </div>
            <div class="card widget-hover overflow-hidden" style="height:16vh">
                <div class="card-header card-no-border pb-2">
                    <h5>Attendance</h5>
                </div>
                <div class="card-body pt-0 count-student">
                    <div class="school-wrapper">
                        <div class="school-header">
                            <h4 class="txt-secondary">
                                {{ $test->candidates->filter(fn($c) => $c->attended)->count() }}/{{ $test->candidates->count() }}
                            </h4>
                        </div>
                        <div style="position: absolute;right:0;top:30px;right:20px"> <img
                                src="{{ asset('adminetic/static/attendance.png') }}" alt="Attendance" width="60">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2 pb-2 p-0">
                        <p> <em class="txt-danger">Profile</em></p>
                        <div class="d-flex justify-content-end">
                            @if (env('APP_DEBUG') ?? false)
                                <div wire:loading.remove wire:target="populateFakeCandidates">
                                    <button type="button" wire:click="populateFakeCandidates"
                                        class="btn btn-primary btn-air-primary mx-2">Add Fake Candidates</button>
                                </div>
                                <div wire:loading wire:target="populateFakeCandidates">
                                    <button type="button" disabled class="btn btn-primary btn-air-primary mx-2"><i
                                            class="fa fa-spinner fa-spin"></i></button>
                                </div>
                            @endif
                            <button type="button" @click="addCandidate = true"
                                class="btn btn-primary btn-air-primary mx-2">Add Candidate</button>
                            <ul class="nav nav-pills nav-warning" id="j-pills-tab" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active"
                                        id="j-pills-dashboard-tab" data-bs-toggle="pill" href="#j-pills-dashboard"
                                        role="tab" aria-controls="j-pills-dashboard" aria-selected="true"
                                        tabindex="-1">Dashboard</a>
                                </li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-candidates-tab"
                                        data-bs-toggle="pill" href="#j-pills-candidates" role="tab"
                                        aria-controls="j-pills-candidates" aria-selected="false">Candidates</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="j-pills-marks-tab"
                                        data-bs-toggle="pill" href="#j-pills-marks" role="tab"
                                        aria-controls="j-pills-marks" aria-selected="false" tabindex="-1">Marks</a>
                                </li>
                                <li class="nav-item" role="presentation"><a class="nav-link"
                                        id="j-pills-configurations-tab" data-bs-toggle="pill"
                                        href="#j-pills-configurations" role="tab"
                                        aria-controls="j-pills-configurations" aria-selected="false"
                                        tabindex="-1">Configurations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="tab-content" id="j-pills-tabContent">
                            <div class="tab-pane fade show active" id="j-pills-dashboard" role="tabpanel"
                                aria-labelledby="j-pills-dashboard-tab">
                                @if ($test->candidates->count() > 0)
                                    @if (count($test->course->sections ?? []) > 0 && count($test->marks ?? []) > 0)
                                        <div class="row">
                                            @foreach (collect($test->course->sections ?? [])->chunk(4) as $section_group)
                                                @foreach ($section_group as $section)
                                                    <div class="col-lg-{{ 12 / count($section_group) }}">
                                                        <div class="card o-hidden welcome-card"
                                                            style="background-image: url({{ asset('adminetic/static/bg.jpg') }})">
                                                            <div class="card-body">
                                                                <h5>{{ $section['name'] }}</h5> <br>
                                                                <h3>{{ count(
                                                                    array_filter($test->marks, function ($mark) use ($section) {
                                                                        $exists = isset($mark['sections'][$section['name']]);
                                                                        $not_null = $exists ? !is_null($mark['sections'][$section['name']] ?? null) : false;
                                                                        $not_empty = $exists ? !empty($mark['sections'][$section['name']] ?? null) : false;
                                                                        return $exists && $not_null && $not_empty;
                                                                    }),
                                                                ) }}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <div class="mt-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex justify-content-start">
                                                    <h5>Result</h5>
                                                    <span class="text-primary mx-2" style="cursor: pointer"
                                                        wire:click="$emitSelf('printResultTable')">Print</span>
                                                    <div wire:loading.remove wire:target="downloadResultTable">
                                                        <span class="text-primary mx-2" style="cursor: pointer"
                                                            wire:click="downloadResultTable">PDF</span>
                                                    </div>
                                                    <div wire:loading wire:target="downloadResultTable">
                                                        <i class="fa fa-spinner fa-spin text-primary"></i>
                                                    </div>
                                                    <div wire:loading.remove wire:target="excelResultTable">
                                                        <span class="text-primary mx-2" style="cursor: pointer"
                                                            wire:click="excelResultTable">Excel</span>
                                                    </div>
                                                    <div wire:loading wire:target="excelResultTable">
                                                        <i class="fa fa-spinner fa-spin text-primary"></i>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs border-tab border-0 mb-0 nav-danger"
                                                    id="topline-tab" role="tablist">
                                                    <li class="nav-item" role="presentation"><a
                                                            class="nav-link active nav-border pt-0 txt-danger nav-danger"
                                                            id="topline-result-table-tab" data-bs-toggle="tab"
                                                            href="#topline-result-table" role="tab"
                                                            aria-controls="topline-result-table"
                                                            aria-selected="true"><i class="fa fa-award"></i>Result</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation"><a
                                                            class="nav-link nav-border txt-danger nav-danger"
                                                            id="topline-statistics-tab" data-bs-toggle="tab"
                                                            href="#topline-statistics" role="tab"
                                                            aria-controls="topline-statistics" aria-selected="false"
                                                            tabindex="-1"><i
                                                                class="fa fa-area-chart"></i>Statistics</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="topline-tabContent">
                                                <div class="tab-pane fade show active" id="topline-result-table"
                                                    role="tabpanel" aria-labelledby="topline-top-user-tab">
                                                    <div id="test-result">
                                                        <style>
                                                            @media print {
                                                                .options {
                                                                    display: none;
                                                                }


                                                            }

                                                            .result-table {
                                                                width: 100%;
                                                                height: 60vh;
                                                                /* Set the height for vertical scrolling */
                                                                overflow: auto;
                                                                /* Allow scrolling */
                                                                position: relative;
                                                            }

                                                            .result-table table {
                                                                width: 100%;
                                                                border-collapse: collapse;
                                                            }

                                                            .result-table th,
                                                            .result-table td {
                                                                padding: 10px;
                                                                border: 1px solid #ccc;
                                                                text-align: left;
                                                            }

                                                            .result-table thead th {
                                                                position: sticky;
                                                                top: 0;
                                                                background-color: #f1f1f1;
                                                                z-index: 2;
                                                                /* Keeps the header above the content */
                                                            }

                                                            .result-table tbody td:first-child,
                                                            .result-table thead th:first-child {
                                                                position: sticky;
                                                                left: 0;
                                                                background-color: #f1f1f1;
                                                                z-index: 1;
                                                                /* Keeps the first column on top */
                                                            }

                                                            /* Special styling for the top-left corner */
                                                            .result-table thead th:first-child {
                                                                z-index: 3;
                                                                /* Ensure the top-left corner stays on top of all other cells */
                                                            }
                                                        </style>

                                                        <div class="result-table">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div
                                                                                class="d-flex justify-content-between">
                                                                                <input type="checkbox" class="options"
                                                                                    @change="toggleCheckAllCandidatesReportCardPrint">
                                                                                <div class="mx-2 options"
                                                                                    x-show="printableCandidateIdsReportCard.length > 0">
                                                                                    <span class="text-primary"
                                                                                        style="cursor: pointer"
                                                                                        x-text="'Print selected (' + printableCandidateIdsReportCard.length + ') report cards'"
                                                                                        @click="Livewire.emit('printReportCard', printableCandidateIdsReportCard)">
                                                                                        "></span>
                                                                                </div>
                                                                            </div>
                                                                        </th>
                                                                        @foreach ($test->course->sections as $section)
                                                                            <th>{{ $section['name'] }}
                                                                                ({{ $section['full_marks'] }})
                                                                            </th>
                                                                        @endforeach
                                                                        <th>Overall</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if (count($test->marks) > 0)
                                                                        @foreach ($test->marks as $candidate_id => $mark)
                                                                            <tr>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex justify-content-between">
                                                                                        <span class="mx-2">
                                                                                            <input type="checkbox"
                                                                                                class="options"
                                                                                                name="printableCandidateIdsReportCard"
                                                                                                value="{{ $candidate_id }}"
                                                                                                x-model="printableCandidateIdsReportCard">
                                                                                        </span>
                                                                                        {{ $mark['candidate']['name'] . ' - ' . $mark['candidate']['code'] }}
                                                                                        @if (!is_null($test->course->report_card_path()))
                                                                                            <span
                                                                                                x-show="openCandidateReport == {{ $candidate_id }}"
                                                                                                @click="$('#candidateReportCard').printThis()"
                                                                                                style="cursor: pointer"
                                                                                                class="text-primary options"
                                                                                                @click="openCandidateReport = null')">Print</span>
                                                                                            <span
                                                                                                class="text-primary options"
                                                                                                @click="openCandidateReport == {{ $candidate_id }} ? openCandidateReport = null : openCandidateReport = {{ $candidate_id }}"
                                                                                                style="cursor: pointer">
                                                                                                -
                                                                                                View
                                                                                                Report
                                                                                                Card</span>
                                                                                        @endif
                                                                                    </div>
                                                                                </td>
                                                                                @foreach ($test->course->sections as $section)
                                                                                    <td>
                                                                                        {{ $mark['sections'][$section['name']] ?? '*' }}
                                                                                    </td>
                                                                                @endforeach
                                                                                <td>
                                                                                    {{ $mark['overall'] ?? '*' }}
                                                                                </td>
                                                                            </tr>
                                                                            @if (!is_null($test->course->report_card_path()))
                                                                                <tr
                                                                                    x-show="openCandidateReport == {{ $candidate_id }}">
                                                                                    <td
                                                                                        colspan="{{ count($test->course->sections) + 2 }}">
                                                                                        <div id="candidateReportCard">
                                                                                            @php
                                                                                                $component =
                                                                                                    'admin.test.result.' .
                                                                                                    strtolower(
                                                                                                        str_replace(
                                                                                                            ' ',
                                                                                                            '-',
                                                                                                            $test
                                                                                                                ->course
                                                                                                                ->name,
                                                                                                        ),
                                                                                                    );
                                                                                            @endphp
                                                                                            <x-dynamic-component
                                                                                                :test='$test'
                                                                                                :mark='$mark'
                                                                                                :component='$component' />
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                        <tr>
                                                                            <td
                                                                                colspan="{{ count($test->course->sections) + 2 }}">
                                                                                No
                                                                                Candidate Available
                                                                        </tr>
                                                                    @endif
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="topline-statistics" role="tabpanel"
                                                    aria-labelledby="topline-top-description-tab">

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="d-flex justify-content-center p-3">
                                        <img src="{{ asset('adminetic/static/student.gif') }}"
                                            alt="Test Created Sucessfully" width="500">
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="j-pills-candidates" role="tabpanel"
                                aria-labelledby="j-pills-candidates-tab">
                                @livewire('admin.candidate.candidate-table', ['test' => $test], key('test-candidates' . $test->id))
                            </div>
                            <div class="tab-pane fade" id="j-pills-marks" role="tabpanel"
                                aria-labelledby="j-pills-marks-tab">
                                @if (count($test->course->sections ?? []) > 0)
                                    <style>
                                        .table-container {
                                            width: 100%;
                                            height: 60vh;
                                            /* Set the height for vertical scrolling */
                                            overflow: auto;
                                            /* Allow scrolling */
                                            position: relative;
                                        }

                                        .table-container table {
                                            width: 100%;
                                            border-collapse: collapse;
                                        }

                                        .table-container th,
                                        .table-container td {
                                            padding: 10px;
                                            border: 1px solid #ccc;
                                            text-align: left;
                                        }

                                        .table-container thead th {
                                            position: sticky;
                                            top: 0;
                                            background-color: #f1f1f1;
                                            z-index: 2;
                                            /* Keeps the header above the content */
                                        }

                                        .table-container tbody td:first-child,
                                        .table-container thead th:first-child {
                                            position: sticky;
                                            left: 0;
                                            background-color: #f1f1f1;
                                            z-index: 1;
                                            /* Keeps the first column on top */
                                        }

                                        /* Special styling for the top-left corner */
                                        .table-container thead th:first-child {
                                            z-index: 3;
                                            /* Ensure the top-left corner stays on top of all other cells */
                                        }
                                    </style>
                                    <form wire:submit.prevent="saveMarks">
                                        <div class="table-container">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="submit" value="Save Marks"
                                                                class="btn btn-primary btn-air-primary"></th>
                                                        @foreach ($test->course->sections as $section)
                                                            <th>{{ $section['name'] }} ({{ $section['full_marks'] }})
                                                            </th>
                                                        @endforeach
                                                        <th>Overall</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($test->candidates->filter(fn($c) => $c->attended)->count() > 0)
                                                        @foreach ($test->candidates->filter(fn($c) => $c->attended) as $candidate)
                                                            <tr>
                                                                <td>{{ $candidate->name . ' - ' . $candidate->code }}
                                                                </td>
                                                                @foreach ($test->course->sections as $section)
                                                                    <td>
                                                                        <input type="number"
                                                                            wire:model.defer="marks.{{ $candidate->id }}.sections.{{ $section['name'] }}"
                                                                            min="0"
                                                                            max="{{ $section['full_marks'] }}"
                                                                            class="form-control" step="any">
                                                                    </td>
                                                                @endforeach
                                                                <td>
                                                                    <input type="number"
                                                                        wire:model.defer="marks.{{ $candidate->id }}.overall"
                                                                        min="0" class="form-control"
                                                                        step="any">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="{{ count($test->course->sections) + 2 }}">No
                                                                Candidate Available
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                @else
                                    <p class="text-center text-danger">No section found</p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="j-pills-configurations" role="tabpanel"
                                aria-labelledby="j-pills-configurations-tab">
                                <form wire:submit.prevent="saveConfigurations">
                                    <label>Description</label>
                                    @livewire('admin.system.trix', ['value' => $test->description ?? ''])
                                    <hr>
                                    <input type="submit" value="Save" class="btn btn-primary btn-air-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Candidate Model --}}
        <div x-show="addCandidate"
            style="width: 100vw; height: 100vh; position: fixed; top: 0; left: 0; z-index: 99999999999; background-color: rgba(0,0,0,0.5);">
            <div class="card" @click.outside="addCandidate = false"
                style="position: fixed;width: 50vw; height: auto; top: 10vh; right: 25vw;overflow-y:auto;z-index:9999999">
                <div class="card-header">Add Candidate</div>
                <div class="card-body shadow-lg p-2">
                    <form wire:submit.prevent="saveCandidate">
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    {{ label('candidates', 'first_name', 'First Name') }}</span>
                                <input type="text" class="form-control" wire:model.defer="candidate_first_name">
                            </div>
                            @error('candidate_first_name')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    {{ label('candidates', 'middle_name', 'Middle Name') }}</span>
                                <input type="text" class="form-control" wire:model.defer="candidate_middle_name">
                            </div>
                            @error('candidate_middle_name')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    {{ label('candidates', 'last_name', 'Last Name') }}</span>
                                <input type="text" class="form-control" wire:model.defer="candidate_last_name">
                            </div>
                            @error('candidate_last_name')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text"> {{ label('candidates', 'email', 'Email') }}</span>
                                <input type="email" class="form-control" wire:model.defer="candidate_email">
                            </div>
                            @error('candidate_email')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    {{ label('candidates', 'phone', 'Contact Number') }}</span>
                                <input type="number" class="form-control" wire:model.defer="candidate_phone">
                            </div>
                            @error('candidate_phone')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <span class="input-group-text"> {{ label('candidates', 'address', 'Address') }}</span>
                                <input type="text" class="form-control" wire:model.defer="candidate_address">
                            </div>
                            @error('candidate_address')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        @if (countries()->count() > 0)
                            <div class="mt-4">
                                <div class="input-group">
                                    <span class="input-group-text">Interested Country</span>
                                    <select wire:model.defer="candidate_country_id" class="form-control">
                                        <option selected disabled>Select ...</option>
                                        @foreach (countries() as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('candidate_country_id')
                                    <br>
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        @endif
                        @if (visas()->count() > 0)
                            <div class="mt-4">
                                <div class="input-group">
                                    <span class="input-group-text">Interested VISA Type</span>
                                    <select wire:model.defer="candidate_visa_id" class="form-control">
                                        <option selected disabled>Select ...</option>
                                        @foreach (visas() as $visa)
                                            <option value="{{ $visa->id }}">
                                                {{ $visa->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('candidate_visa_id')
                                    <br>
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        @endif
                        <div class="mt-2">
                            <div wire:loading.remove wire:target='saveCandidate'>
                                <input type="submit" value="Add Candidate" class="btn btn-primary btn-air-primary"
                                    style="width: 100%">
                            </div>
                            <div wire:loading wire:target='saveCandidate'>
                                <button type="button" disabled class="btn btn-primary btn-air-primary"
                                    style="width: 100%"> Adding Candidate ... <i class="fa fa-spinner fa-spin"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
