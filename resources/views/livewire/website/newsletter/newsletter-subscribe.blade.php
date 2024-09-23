<div>
    <section class="newsletter mt-4">
        <div class="container">
            <div class="xb-newsletter pos-rel">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="xb-item--inner">
                            <div class="xb-item--holder mb-30">
                                <span>newsletter</span>
                                <h3>Subscribe to the free newsletter to receive the latest <br> news & case
                                    studies!
                                </h3>
                            </div>
                            <form class="xb-item--form" wire:submit.prevent="subscribe">
                                <input type="email" wire:model.defer="email" placeholder="Your e-mail address">
                                <div wire:loading.remove wire:target="subscribe">
                                    <button type="submit" class="thm-btn">Subscribe</button>
                                </div>
                                <div wire:loading wire:target="subscribe">
                                    <button type="submit" class="thm-btn">Subscribing ... <i
                                            class="fa fa-spinner fa-spin"></i></button>
                                </div>
                            </form>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="xb-newsletter__img">
                    <img src="{{ asset('website/assets/img/bg/newsletter_img.png') }}" alt="">
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
                Livewire.on('subscribe_success', (message) => {
                    toastr.success(message);
                })
            });
        </script>
    @endpush
</div>
