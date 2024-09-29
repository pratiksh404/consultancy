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

    /* Basic table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Arial', sans-serif;
        margin: 20px 0;
        background-color: #f4f4f9;
    }

    /* Table header */
    table th {
        background-color: #6c7ae0;
        color: #ffffff;
        font-weight: bold;
        padding: 12px 15px;
        text-align: left;
    }

    /* Table rows */
    table td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
        color: #333;
    }

    /* Even row shading */
    table tr:nth-child(even) {
        background-color: #f3f3f7;
    }

    /* Hover effect for rows */
    table tr:hover {
        background-color: #f1f1f9;
    }

    /* Responsive design for smaller screens */
    @media screen and (max-width: 600px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
            width: 100%;
        }

        table thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            border: none;
            position: relative;
            padding-left: 50%;
            text-align: right;
        }

        table td:before {
            content: attr(data-label);
            position: absolute;
            left: 10px;
            font-weight: bold;
            text-align: left;
        }
    }
</style>
