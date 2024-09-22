<div>
    <section class="contact contact-pt gray-bg">
        <div class="container">
            <div class="xb-contact pos-rel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="xb-item--inner">
                            <div class="xb-item--holder mb-25">
                                <span><img src="{{ asset('website/assets/img/icon/n_pad.svg') }}" alt="">Contact
                                    Us</span>
                                <h3>Do you have questions or want more <br> information?</h3>
                            </div>
                            <form class="xb-item--form contact-from" wire:submit.prevent="send_inquiry">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="{{ asset('website/assets/img/icon/c_user.svg') }}"
                                                    alt=""></span>
                                            <input type="text" wire:model.defer="name" placeholder="Goladria Gomez">
                                        </div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="{{ asset('website/assets/img/icon/c_mail.svg') }}"
                                                    alt=""></span>
                                            <input type="email" wire:model.defer="email"
                                                placeholder="e.visa@services.com">
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    @if (countries()->count() > 0)
                                        <div class="col-lg-12">
                                            <div class="xb-item--field">
                                                <select class="form-control" wire:model.defer="country_id"
                                                    style="    padding: 15px 46px 18px;
    border: 1px solid #EDF3F5;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    height: 60px;
    font-size: 14px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;">
                                                    <option value="">Interested Country ...</option>
                                                    @foreach (countries() as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('country_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    @endif

                                    @if (visas()->count() > 0)
                                        <div class="col-lg-12">
                                            <div class="xb-item--field">
                                                <select class="form-control" wire:model.defer="visa_id"
                                                    style="    padding: 15px 46px 18px;
    border: 1px solid #EDF3F5;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    height: 60px;
    font-size: 14px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;">
                                                    <option value="">Ineterested visa ...</option>
                                                    @foreach (visas() as $visa)
                                                        <option value="{{ $visa->id }}">
                                                            {{ $visa->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('visa_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    @endif
                                    @if (courses()->count() > 0)
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <select class="form-control" wire:model.defer="course_id"
                                                    style="    padding: 15px 46px 18px;
border: 1px solid #EDF3F5;
border-radius: 10px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
-ms-border-radius: 10px;
-o-border-radius: 10px;
height: 60px;
font-size: 14px;
-webkit-transition: 0.3s;
-o-transition: 0.3s;
transition: 0.3s;">
                                                    <option value="">Ineterested Course ...</option>
                                                    @foreach (courses() as $course)
                                                        <option value="{{ $course->id }}">
                                                            {{ $course->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('course_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    @endif
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="{{ asset('website/assets/img/icon/c_call.svg') }}"
                                                    alt=""></span>
                                            <input type="number" wire:model.defer="phone"
                                                placeholder="+888 -8867 3333">
                                        </div>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="xb-item--field">
                                            <span><img src="{{ asset('website/assets/img/icon/c_message.svg') }}"
                                                    alt=""></span>
                                            <textarea wire:model.defer="message" id="message" cols="30" rows="10" placeholder="Write Your Message..."></textarea>
                                        </div>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="thm-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592852423971!5m2!1sen!2sbd"></iframe>
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
                Livewire.on('inquiry_success', () => {
                    toastr.success('Inquiry sent successfully. We will contact you soon.');
                })
            });
        </script>
    @endpush
</div>
