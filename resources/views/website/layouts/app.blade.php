<!doctype html>
<html lang="zxx">

<head>

    {{-- Meta Start --}}
    @include('website.layouts.components.meta')
    {{-- Meta End --}}

    {{-- Links Start --}}
    @include('website.layouts.assets.links')
    {{-- Links End --}}
    @yield('custom_css')
    {{-- Start Schema Org --}}
    {!! website_schema() !!}
    @yield('schema_org')
    {{-- End Schema Org --}}
</head>

<body>

    {{-- Preloader Start --}}
    @include('website.layouts.components.preloader')
    {{-- Preloader End --}}

    <div class="body_wrap">
        {{-- Header Start --}}
        <x-website.header />
        {{-- Header End --}}
        <div class="main">
            @yield('content')
        </div>

        <!-- Footer start -->
        <x-website.footer />
        <!-- Footer End -->

    </div>

    {{-- Scripts Start --}}
    @include('website.layouts.assets.scripts')
    {{-- Scripts End --}}
    @yield('custom_js')
</body>

</html>
