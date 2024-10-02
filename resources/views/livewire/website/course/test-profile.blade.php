<div>
    @if (!\Carbon\Carbon::create($test->test_date)->isPast())
        <section class="contact gray-bg-2">
            <div class="xb-contact2 pos-rel" style="margin-bottom: 0">
                <div class="xb-contact2__bg" data-background="{{ asset('website/assets/img/bg/cf_bg.jpg') }}"
                    style="background-image: url({{ asset('website/assets/img/bg/cf_bg.jpg') }});">
                </div>
                <div class="col-lg-7">
                    <div class="xb-item--holder">
                        <div class="sec-title sec-title--white style-2 mb-35">
                            <span class="sec-title--sub"><img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                    alt="">Register To {{ $test->name }}<img
                                    src="{{ asset('website/assets/img/icon/h_star.png') }}" alt=""></span>
                            <h3 class="sec-title--heading">
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
                                @endif
                                <h2>{{ toBS(\Carbon\Carbon::create($test->test_date)) }}</h2>
                            </h3>
                        </div>
                    </div>
                    <form class="xb-item--form" wire:submit.prevent="saveCandidate">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="xb-item--field">
                                    <span><img src="{{ asset('website/assets/img/icon/c_user.svg') }}"
                                            alt=""></span>
                                    <input type="text" wire:model.defer="candidate_first_name"
                                        placeholder="Your First Name">
                                    @error('candidate_first_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="xb-item--field">
                                    <span><img src="{{ asset('website/assets/img/icon/c_user.svg') }}"
                                            alt=""></span>
                                    <input type="text" wire:model.defer="candidate_middle_name"
                                        placeholder="Your Middle Name">
                                    @error('candidate_middle_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="xb-item--field">
                                    <span><img src="{{ asset('website/assets/img/icon/c_user.svg') }}"
                                            alt=""></span>
                                    <input type="text" wire:model.defer="candidate_last_name"
                                        placeholder="Your Last Name">
                                    @error('candidate_last_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <span><img src="{{ asset('website/assets/img/icon/c_mail.svg') }}"
                                            alt=""></span>
                                    <input type="email" wire:model.defer="candidate_email" placeholder="Your Email">
                                    @error('candidate_email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xb-item--field">
                                    <span><img src="{{ asset('website/assets/img/icon/c_call.svg') }}"
                                            alt=""></span>
                                    <input type="number" wire:model.defer="candidate_phone" placeholder="Your Phone"
                                        min="9000000000" max="9999999999" style="width: 100%;border:none">
                                    @error('candidate_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="xb-item--field">
                            <input type="text" wire:model.defer="candidate_address" placeholder="Your Address">
                            @error('candidate_address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="xb-item--field">
                            <select class="form-control" wire:model.defer="candidate_country_id"
                                style="    background-color: #252525;
                    height: 60px;
                    padding: 16px 52px 18px;
                    font-size: 14px;
                    color: var(--color-white);
                    -webkit-transition: 0.3s;
                    -o-transition: 0.3s;
                    transition: 0.3s;
                    border:none">
                                <option value="">Interested Country ...</option>
                                @foreach (countries() as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('candidate_country_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="xb-item--field">
                            <select class="form-control" wire:model.defer="candidate_visa_id"
                                style="    background-color: #252525;
height: 60px;
padding: 16px 52px 18px;
font-size: 14px;
color: var(--color-white);
-webkit-transition: 0.3s;
-o-transition: 0.3s;
transition: 0.3s;
border:none">
                                <option value="">Interested Visa ...</option>
                                @foreach (visas() as $visa)
                                    <option value="{{ $visa->id }}">
                                        {{ $visa->name }}</option>
                                @endforeach
                            </select>
                            @error('candidate_visa_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="xb-item--btn mt-35">
                            <div wire:loading wire:target="saveCandidate">
                                <button type="button" disabled class="grd-btn">Processing ... <i
                                        class="fa fa-spinner fa-spin"></i><span><img
                                            src="{{ asset('website/assets/img/icon/arrow_right.svg') }}"
                                            alt=""></span></button>
                            </div>
                            <div wire:loading.remove wire:target="saveCandidate">
                                <button type="submit" class="grd-btn">Register<span><img
                                            src="{{ asset('website/assets/img/icon/arrow_right.svg') }}"
                                            alt=""></span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-shape">
                    <div class="shape shape--1">
                        <div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:60}">
                            <img src="{{ asset('website/assets/img/shape/cs_01.png') }}" alt="">
                        </div>
                    </div>
                    <div class="shape shape--2">
                        <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:-60}"
                            style="transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                            <img src="{{ asset('website/assets/img/shape/cs_02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="shape shape--3">
                        <div class="shape-inner" data-parallax="{&quot;x&quot;:50}"
                            style="transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                            <img src="{{ asset('website/assets/img/shape/cs_03.png') }}" alt="">
                        </div>
                    </div>
                    <div class="shape shape--4">
                        <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:60}">
                            <img src="{{ asset('website/assets/img/shape/cs_04.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @else
        @if ($test->is_published)
            <div class="container" x-init="    @this.on('printTestContent', (content) => {
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
                });">
                <iframe id="printFrame" style="display:none;"></iframe>
                @if ($test->publish_type == \App\Http\Livewire\Admin\Test\TestProfile::TABLE_PUBLISH)
                    <x-admin.test.result.table :test="$test" />
                @elseif($test->publish_type == \App\Http\Livewire\Admin\Test\TestProfile::INDIVIDUAL_PUBLISH)
                    <div class="blog-sidebar mb-10">
                        <div class="widget">
                            <h3 class="widget-title">{{ $test->name }} Result</h3>
                            <form class="widget__search" wire:submit.prevent="searchResult">
                                <input type="text" placeholder="Enter Your Code Number" wire:model.defer="code">
                                <button type="submit"><img src="{{ asset('website/assets/img/icon/search.svg') }}"
                                        alt=""></button>
                                @error('code')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </form>
                            <div wire:loading wire:target="searchResult">
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            <div wire:loading.remove wire:target="searchResult">
                                @if (!is_null($code))
                                    @if (!is_null($candidate_mark))
                                        <div class="row mt-none-30 mb-80 mt-20">
                                            <div class="d-flex justify-content-between">
                                                <h3>Score of {{ $candidate->name }}</h3>
                                                <span wire:click="printReportCard({{ $candidate->id }})"
                                                    style="cursor: pointer" class="text-primary options">Print</span>
                                            </div>
                                            @if (count($candidate_mark['sections'] ?? []) > 0)
                                                <div class="d-flex justify-content-around">
                                                    @foreach ($candidate_mark['sections'] as $section => $score)
                                                        <div class=" mt-10">
                                                            <div
                                                                class="team-skills style-{{ !$loop->first ? ($loop->iteration <= 4 ? $loop->iteration : ($loop->iteration % 4 == 1 ? 1 : $loop->iteration % 4)) : '' }}">
                                                                <div class="xb-item--inner">
                                                                    <h5 class="xb-item--number"
                                                                        style="font-size: 40px">
                                                                        <span class="xbo"
                                                                            data-count="{{ $score }}">{{ $score }}</span>
                                                                    </h5>
                                                                    <h4 class="xb-item--title" style="top:6px">
                                                                        {{ $section }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class=" mt-10">
                                                        <div class="team-skills">
                                                            <div class="xb-item--inner">
                                                                <h5 class="xb-item--number" style="font-size: 40px">
                                                                    <span class="xbo"
                                                                        data-count="{{ $candidate_mark['overall'] }}">{{ $candidate_mark['overall'] }}</span>
                                                                </h5>
                                                                <h4 class="xb-item--title" style="top:6px">
                                                                    Overall</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @else
                                        <div class="text-center text-danger">No Result Found</div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @elseif($test->publish_type == \App\Http\Livewire\Admin\Test\TestProfile::PHYSICAL_PUBLISH)
                    <section class="contact gray-bg-2">
                        <div class="xb-contact2 pos-rel" style="margin-bottom: 0;min-height:60vh">
                            <div class="xb-contact2__bg"
                                data-background="{{ asset('website/assets/img/bg/cf_bg.jpg') }}"
                                style="background-image: url({{ asset('website/assets/img/bg/cf_bg.jpg') }});">
                            </div>
                            <div class="col-lg-7">
                                <div class="xb-item--holder">
                                    <div class="sec-title sec-title--white style-2 mb-35">
                                        <span class="sec-title--sub"><img
                                                src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                                alt="">{{ $test->name }} results has been published. Please
                                            visit our office to collect your report card.<img
                                                src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-shape">
                                <div class="shape shape--1">
                                    <div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:60}">
                                        <img src="{{ asset('website/assets/img/shape/cs_01.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="shape shape--2">
                                    <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:-60}"
                                        style="transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                        <img src="{{ asset('website/assets/img/shape/cs_02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="shape shape--3">
                                    <div class="shape-inner" data-parallax="{&quot;x&quot;:50}"
                                        style="transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                        <img src="{{ asset('website/assets/img/shape/cs_03.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="shape shape--4">
                                    <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:60}">
                                        <img src="{{ asset('website/assets/img/shape/cs_04.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                @else
                    <x-admin.test.result.table :test="$test" />
                @endif
            </div>
        @else
            <section class="contact gray-bg-2">
                <div class="xb-contact2 pos-rel" style="margin-bottom: 0;min-height:60vh">
                    <div class="xb-contact2__bg" data-background="{{ asset('website/assets/img/bg/cf_bg.jpg') }}"
                        style="background-image: url({{ asset('website/assets/img/bg/cf_bg.jpg') }});">
                    </div>
                    <div class="col-lg-7">
                        <div class="xb-item--holder">
                            <div class="sec-title sec-title--white style-2 mb-35">
                                <span class="sec-title--sub"><img
                                        src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                        alt="">{{ $test->name }} is finished. Thank you for all
                                    participants<img src="{{ asset('website/assets/img/icon/h_star.png') }}"
                                        alt=""></span>
                                <h3 class="sec-title--heading">
                                    Results will be announced soon.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="contact-shape">
                        <div class="shape shape--1">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:60}">
                                <img src="{{ asset('website/assets/img/shape/cs_01.png') }}" alt="">
                            </div>
                        </div>
                        <div class="shape shape--2">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:-60}"
                                style="transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(38.647px, -46.34px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                <img src="{{ asset('website/assets/img/shape/cs_02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="shape shape--3">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:50}"
                                style="transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(20.845px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                <img src="{{ asset('website/assets/img/shape/cs_03.png') }}" alt="">
                            </div>
                        </div>
                        <div class="shape shape--4">
                            <div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:60}">
                                <img src="{{ asset('website/assets/img/shape/cs_04.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        @endif
    @endif
    @push('livewire_scripts')
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "20000",
                "extendedTimeOut": "20000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            document.addEventListener('livewire:load', function() {
                Livewire.on('candidateAdded', () => {
                    toastr.success(
                        'Mock test registration successful. Please verify your email address. We will contact you soon.'
                    );
                })
            });
        </script>
    @endpush
</div>
