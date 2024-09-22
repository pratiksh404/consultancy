@props(['menus' => breadcrumb(), 'title'])
@if (count($menus ?? []) > 0)
    <section class="breadcrumb pos-rel bg_img" data-background="{{ asset('website/assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="breadcrumb__content">
                <h2 class="breadcrumb__title">{{ $title }}</h2>
                <ul class="breadcrumb__list clearfix">
                    @foreach ($menus as $menu)
                        @if (isset($menu['route']) && isset($menu['name']))
                            @if (!is_null($menu['name']) && !is_null($menu['route']))
                                <li class="breadcrumb-item"> <a href="{{ $menu['route'] }}">{{ $menu['name'] }}</a> </li>
                            @endif
                        @else
                            <li class="breadcrumb-item">{{ $menu['name'] }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="breadcrumb__circle">
            <span class="big" data-parallax='{"y" : 100, "scale" : 0.1}'></span>
            <span class="small" data-parallax='{"y" : 100, "scale" : 0.1}'></span>
        </div>
        <div class="breadcrumb__shape">
            <div class="shape shape--1">
                <div class="shape-inner" data-parallax='{"x":-50,"y":80}'>
                    <img src="{{ asset('website/assets/img/shape/br_shape1.png') }}" alt="">
                </div>
            </div>
            <div class="shape shape--2">
                <div class="shape-inner" data-parallax='{"x":50,"y":-90}'>
                    <img src="{{ asset('website/assets/img/shape/br_shape2.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endif
