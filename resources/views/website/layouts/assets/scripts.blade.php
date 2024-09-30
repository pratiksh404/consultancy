<!-- jquery include -->
<script src="{{ asset('website/assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('website/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('website/assets/js/appear.js') }}"></script>
<script src="{{ asset('website/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('website/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('website/assets/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('website/assets/js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
@stack('livewire_scripts')

<script>
    var swiper = new Swiper(".footer-gallery-images", {
        slidesPerView: 6,
        loop: true,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
