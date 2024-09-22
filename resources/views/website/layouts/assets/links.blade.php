<link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/main.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@livewireStyles

<style>
    .testimonial-content {
        position: relative;
        max-height: 200px;
        /* Adjust the height as needed */
        overflow: hidden;
    }

    .testimonial-content::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50px;
        /* Adjust the fade-out height */
        background: linear-gradient(transparent, white);
        /* Gradual fade to white (or the background color) */
    }
</style>
