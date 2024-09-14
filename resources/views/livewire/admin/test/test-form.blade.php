<div>
    <style>
        .radio-buttons {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .custom-radio input {
            display: none;
        }

        .radio-btn {
            margin: 10px;
            width: 220px;
            height: 240px;
            border: 3px solid transparent;
            display: inline-block;
            border-radius: 10px;
            position: relative;
            text-align: center;
            box-shadow: 0 0 20px #c3c3c367;
            cursor: pointer;
        }

        .radio-btn>i {
            color: #ffffff;
            background-color: #FFDAE9;
            font-size: 20px;
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) scale(2);
            border-radius: 50px;
            padding: 3px;
            transition: 0.5s;
            pointer-events: none;
            opacity: 0;
        }

        .radio-btn .hobbies-icon {
            width: 150px;
            height: 150px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .radio-btn .hobbies-icon img {
            display: block;
            width: 100%;
            margin-bottom: 20px;

        }

        .radio-btn .hobbies-icon i {
            color: #FFDAE9;
            line-height: 80px;
            font-size: 60px;
        }

        .radio-btn .hobbies-icon h3 {
            color: #555;
            font-size: 18px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .custom-radio input:checked+.radio-btn {
            border: 2px solid #110481;
        }

        .custom-radio input:checked+.radio-btn>i {
            opacity: 1;
            transform: translateX(-50%) scale(1);
        }
    </style>
    <div class="card" x-show="createTestPanel" x-cloak
        style="position: fixed;width: 40vw; height: 85vh; top: 10vh; right: 30vw;overflow-y:auto">
        <div class="card-header">
            <h5>Create Test</h5>
        </div>
        <div x-data="{ test_added: false }" x-init="Livewire.on('testAdded', () => {
            createTestPanel = false;
        
        });">

            <form wire:submit.prevent="save">
                <div class="card-body shadow-lg p-2">
                    <div x-data="{ test_date: @entangle('test_date').defer }" x-init="() => {
                        let today = moment().format('YYYY-MM-DD'); // Get today's date
                    
                        var picker = $('#datepicker').daterangepicker({
                            'singleDatePicker': true,
                            'startDate': today, // Start with today's date
                            'locale': { format: 'YYYY-MM-DD' },
                            'opens': 'down',
                            'drops': 'down',
                            'alwaysShowCalendars': true,
                            'linkedCalendars': true,
                            isInvalidDate: function(date) {
                                return date.isBefore(moment(), 'day'); // Disable past dates
                            },
                            'timePicker': true,
                            'autoApply': true,
                            autoUpdateInput: true,
                        }, function(start) {
                            test_date = start.format('YYYY-MM-DD');
                        });
                    
                        $('#datepicker').on('apply.daterangepicker', function(ev, picker) {
                            test_date = picker.startDate.format('YYYY-MM-DD');
                        });
                    
                        $('.calendar.right').show();
                    
                        $watch('test_date', value => $('#datepicker').data('daterangepicker').setStartDate(value));
                    }">
                        <div id="datepicker-container" class="d-flex justify-content-center mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                <input type="text" id="datepicker" class="form-control" readonly />
                            </div>
                        </div>
                        @error('test_date')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        @if (courses()->count() > 0)
                            <div class="radio-buttons">
                                @error('course_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    <br>
                                @enderror
                                @foreach (courses() as $course)
                                    <label class="custom-radio">
                                        <input type="radio" name="course_id" wire:model.defer="course_id"
                                            value="{{ $course->id }}">
                                        <span class="radio-btn"><i class="las la-check"></i>
                                            <div class="hobbies-icon">
                                                <img src="{{ $course->thumbnail }}">
                                                <h3 class="">{{ $course->name }}</h3>
                                            </div>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-danger btn-air-danger mx-1"
                        @click="createTestPanel = false">Close</button>
                    <button type="submit" class="btn btn-success btn-air-success mx-1">Save</button>
                </div>
            </form>


        </div>
    </div>
    @push('livewire_third_party')
        {{-- Test Form Scripts --}}
        @include('admin.layouts.modules.test.scripts.test_form_livewire_script')
    @endpush
</div>
