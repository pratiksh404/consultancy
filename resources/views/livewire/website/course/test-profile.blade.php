<div>
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
                                <input type="text" wire:model.defer="candidate_email" placeholder="Your Email">
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
                                    style="width: 100%;border:none">
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
                        <button type="submit" class="grd-btn">Register<span><img
                                    src="{{ asset('website/assets/img/icon/arrow_right.svg') }}"
                                    alt=""></span></button>
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
    @push('livewire_scripts')
        <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
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
