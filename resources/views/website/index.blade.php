@extends('website.layouts.app')

@section('content')
    <main>

        <!-- hero start -->
        @include('website.layouts.pages.home.hero')
        <!-- hero end -->

        <!-- Universities start -->
        <x-website.universities />
        <!-- Universities end -->

        <!-- visa type start -->
        <x-website.visas />
        <!-- visa type end -->

        <!-- Steps start -->
        <x-website.steps />
        <!-- Steps end -->

        <!-- counter start -->
        <section class="counter pt-120 pb-120 bg_img" data-background="assets/img/bg/counter_bg.jpg')}}">
            <div class="container">
                <div class="sec-title mb-45">
                    <h2 class="mb-40 wow skewIn">Discovering Our Biggest Successes: The Stories <br> <span> Behind
                            Our Great Achievements</span>
                    </h2>
                    <p>Embarking on a journey to reunite families, we recently had the privilege of assisting a <br>
                        couple in securing their spouse's visa. </p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="xb-counter ul_li">
                            <div class="xb-item--item ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('website/assets/img/icon/c_01.svg') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--number"><span class="xbo" data-count="20">00</span><span
                                            class="suffix">+</span></h2>
                                    <h5 class="xb-item--title">Visa Categories</h5>
                                </div>
                            </div>
                            <div class="xb-item--item style-2 ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('website/assets/img/icon/c_02.svg') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--number"><span class="xbo" data-count="30">00</span><span
                                            class="suffix">K+</span></h2>
                                    <h5 class="xb-item--title">Visa Process</h5>
                                </div>
                            </div>
                            <div class="xb-item--item style-3 ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('website/assets/img/icon/c_03.svg') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--number"><span class="xbo" data-count="40">00</span><span
                                            class="suffix">K+</span></h2>
                                    <h5 class="xb-item--title">Successful Project</h5>
                                </div>
                            </div>
                            <div class="xb-item--item style-4 ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('website/assets/img/icon/c_04.svg') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--number"><span class="xbo" data-count="180">00</span><span
                                            class="suffix">K+</span></h2>
                                    <h5 class="xb-item--title">Pro Consultants</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter end -->

        <!-- country start -->
        <section class="country pt-120 pb-130">
            <div class="container">
                <div class="row mb-30 align-items-center">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <h2 class="mb-20 wow skewIn">Make Your Choice for the <br> <span>Preferred
                                    Nation</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="sec-title mb-20">
                            <p>Choosing the ideal destination for immigration is a pivotal decision that can shape
                                the trajectory of your </p>
                        </div>
                    </div>
                </div>
                <ul class="xb-country-nav nav nav-tabs ul_li_between mb-65" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="xbc-tab1" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane1"
                            type="button" role="tab" aria-controls="xbc-tab-pane1" aria-selected="true">Europe
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab2" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane2"
                            type="button" role="tab" aria-controls="xbc-tab-pane2" aria-selected="false">North
                            America
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab3" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane3"
                            type="button" role="tab" aria-controls="xbc-tab-pane3" aria-selected="false">Asia
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab4" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane4"
                            type="button" role="tab" aria-controls="xbc-tab-pane4" aria-selected="false">Latin
                            America
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab5" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane5"
                            type="button" role="tab" aria-controls="xbc-tab-pane5" aria-selected="false">Oceania
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab6" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane6"
                            type="button" role="tab" aria-controls="xbc-tab-pane6" aria-selected="false">Africa
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xbc-tab7" data-bs-toggle="tab" data-bs-target="#xbc-tab-pane7"
                            type="button" role="tab" aria-controls="xbc-tab-pane7" aria-selected="false">Antarctica
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane animated fadeInUp show active" id="xbc-tab-pane1" role="tabpanel"
                        aria-labelledby="xbc-tab1" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane2" role="tabpanel"
                        aria-labelledby="xbc-tab2" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane3" role="tabpanel"
                        aria-labelledby="xbc-tab3" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane4" role="tabpanel"
                        aria-labelledby="xbc-tab4" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane5" role="tabpanel"
                        aria-labelledby="xbc-tab5" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane6" role="tabpanel"
                        aria-labelledby="xbc-tab6" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane animated fadeInUp" id="xbc-tab-pane7" role="tabpanel"
                        aria-labelledby="xbc-tab7" tabindex="0">
                        <div class="xb-country ul_li">
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_06.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Germany</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_07.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Greece</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_08.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Hungary</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_09.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Iceland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_01.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Canada</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_11.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Italy</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_12.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Luxembourg</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_02.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Belgium</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_10.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Ireland</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_03.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Denmark</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_05.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">France</h3>
                                </a>
                            </div>
                            <div class="xb-item--item">
                                <a href="country-single.html" class="xb-item--inner ul_li">
                                    <div class="xb-item--flag">
                                        <img src="{{ asset('website/assets/img/country/img_04.png') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Australia</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- country end -->

        <!-- team start -->
        <section class="team pb-120">
            <div class="container">
                <div class="team-wrap pos-rel">
                    <div class="row mt-none-30">
                        <div class="col-xl-6 mt-30">
                            <div class="sec-title mb-45">
                                <h2 class="mb-40 wow skewIn">Our trusted immigration <br> <span> support
                                        team</span>
                                </h2>
                                <p>At the heart of our commitment to providing exceptional immigration solutions
                                    stands</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner" data-parallax='{"scale" : 1}'>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_01.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Esther Howard</a>
                                        </h3>
                                        <span class="xb-item--designation">Legal Advisor</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_02.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Annette Black</a>
                                        </h3>
                                        <span class="xb-item--designation">Education Counsellor</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_03.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Andrew Riis</a>
                                        </h3>
                                        <span class="xb-item--designation">Visa Specialist</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_04.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Kristin Watson</a>
                                        </h3>
                                        <span class="xb-item--designation">Visa Coordinator</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_05.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Jerome Bell</a>
                                        </h3>
                                        <span class="xb-item--designation">General Manager</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                            <div class="xb-team text-center">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/team/img_06.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name"><a href="team-single.html">Eleanor Pena</a>
                                        </h3>
                                        <span class="xb-item--designation">Case Manager</span>
                                    </div>
                                    <ul class="xb-item--social list-unstyled">
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-team-bg">
                        <div class="xb-bg xb-bg--1"></div>
                        <div class="xb-bg xb-bg--2"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team end -->

        <!-- testimonial start -->
        <section class="testimonial bg_img pt-130 pb-130" data-bg-color="#EDF3F5"
            data-background="assets/img/bg/tm_bg.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="sec-title margin-none-md mb-30-xs mb-125">
                            <h2 class="mb-70 wow skewIn">Happy Clients Reflect on Their <br>
                                <span> Journey with Us</span>
                            </h2>
                            <p>Embark on a Global Exploration: <br> Experience Joy in 190+ Countries <br> and Across
                                the
                                World</p>
                        </div>
                        <div class="xb-testimonial__nav ul_li">
                            <div class="tm-nav-item tm-button-prev"></div>
                            <div class="tm-nav-item tm-button-next"></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="xb-swiper-sliders">
                            <div class="xb-carousel-inner">
                                <div class="xb-testimonial-slider xb-swiper-container swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide xb-swiper-slide">
                                            <div class="xb-testimonial">
                                                <div class="xb-item--inner text-center">
                                                    <div class="xb-item--img">
                                                        <img src="{{ asset('website/assets/img/icon/trustpilot.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="xb-item--content">
                                                        "From start to finish, evisa made my visa application a
                                                        breeze.
                                                        Their expertise and friendly guidance turned a complex
                                                        process
                                                        into a walk in the park. Grateful for their seamless
                                                        service!"
                                                    </div>
                                                    <div class="xb-item--bottom">
                                                        <div class="xb-item--ratting">
                                                            <img src="{{ asset('website/assets/img/icon/tr_rattig.png') }}"
                                                                alt="">
                                                        </div>
                                                        <h3 class="xb-item--title">Goladria Gomez</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide xb-swiper-slide">
                                            <div class="xb-testimonial">
                                                <div class="xb-item--inner text-center">
                                                    <div class="xb-item--img">
                                                        <img src="{{ asset('website/assets/img/icon/trustpilot.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="xb-item--content">
                                                        "e.visa made my immigration journey stress-free. Their
                                                        expertise
                                                        and personalized guidance were remarkable, guiding me from
                                                        application to approval. Now happily settled in the UK."
                                                    </div>
                                                    <div class="xb-item--bottom">
                                                        <div class="xb-item--ratting">
                                                            <img src="{{ asset('website/assets/img/icon/tr_rattig.png') }}"
                                                                alt="">
                                                        </div>
                                                        <h3 class="xb-item--title">Marinda Dilendira</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide xb-swiper-slide">
                                            <div class="xb-testimonial">
                                                <div class="xb-item--inner text-center">
                                                    <div class="xb-item--img">
                                                        <img src="{{ asset('website/assets/img/icon/trustpilot.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="xb-item--content">
                                                        "From start to finish, evisa made my visa application a
                                                        breeze.
                                                        Their expertise and friendly guidance turned a complex
                                                        process
                                                        into a walk in the park. Grateful for their seamless
                                                        service!"
                                                    </div>
                                                    <div class="xb-item--bottom">
                                                        <div class="xb-item--ratting">
                                                            <img src="{{ asset('website/assets/img/icon/tr_rattig.png') }}"
                                                                alt="">
                                                        </div>
                                                        <h3 class="xb-item--title">Goladria Gomez</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end -->

        <!-- faq start -->
        <section class="faq pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="xb-faq-content">
                            <div class="sec-title mb-125">
                                <h2 class="mb-30 wow skewIn">Common questions <br> <span> answered</span></h2>
                                <p>At the heart of our commitment to providing <br> exceptional immigration
                                    solutions
                                    stands our trusted</p>
                            </div>
                            <div class="faq-img">
                                <img src="{{ asset('website/assets/img/faq/faq_img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="xb-faq">
                            <ul class="accordion_box clearfix">
                                <li class="accordion block active-block">
                                    <div class="acc-btn">
                                        What services do you offer?
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="acc_body current">
                                        <div class="content">
                                            <p>We offer comprehensive immigration and visa consulting services, <br>
                                                including visa application assistance, document preparation,</p>
                                            <ul>
                                                <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                                <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                                <li><i class="far fa-check"></i>Transparency and Communication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        What is the consultation process like?
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>We offer comprehensive immigration and visa consulting services, <br>
                                                including visa application assistance, document preparation,</p>
                                            <ul>
                                                <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                                <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                                <li><i class="far fa-check"></i>Transparency and Communication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        How much do your services cost?
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>We offer comprehensive immigration and visa consulting services, <br>
                                                including visa application assistance, document preparation,</p>
                                            <ul>
                                                <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                                <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                                <li><i class="far fa-check"></i>Transparency and Communication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        How do I get started with your services?
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>We offer comprehensive immigration and visa consulting services, <br>
                                                including visa application assistance, document preparation,</p>
                                            <ul>
                                                <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                                <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                                <li><i class="far fa-check"></i>Transparency and Communication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        What is your success rate with visa applications?
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>We offer comprehensive immigration and visa consulting services, <br>
                                                including visa application assistance, document preparation,</p>
                                            <ul>
                                                <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                                <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                                <li><i class="far fa-check"></i>Transparency and Communication
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq end -->

        <!-- blog start -->
        <section class="blog pb-130">
            <div class="container">
                <div class="blog-wrap">
                    <div class="sec-title mb-60 text-center">
                        <h2 class="mb-30 wow skewIn">Cast Your Eyes Upon Our <br> <span> Newest Article</span>
                        </h2>
                        <p>Explore the most recent addition to our informative articles</p>
                    </div>
                    <div class="row justify-content-md-center mt-none-30">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-blog">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <img src="{{ asset('website/assets/img/blog/img_01.jpg') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <span class="xb-item--category">Consulting</span>
                                        <ul class="xb-item--meta ul_li mb-20">
                                            <li><img src="{{ asset('website/assets/img/icon/user.svg') }}"
                                                    alt="">By farugia
                                            </li>
                                            <li><img src="{{ asset('website/assets/img/icon/calendar.svg') }}"
                                                    alt="">16 August
                                                2023</li>
                                        </ul>
                                        <h3 class="xb-item--title border-effect"><a href="blog-single.html">Cultural
                                                adjustment thriving in a new country..</a></h3>
                                        <a class="xb-item--link" href="blog-single.html">Read the
                                            article<span><img
                                                    src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
                                                    alt=""></span></a>
                                    </div>
                                    <a class="xb-overlay xb-overlay-link" href="blog-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-blog">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <a href="blog-single.html"><img
                                                src="{{ asset('website/assets/img/blog/img_02.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <a class="xb-item--category color-2" href="#!">Immigration</a>
                                        <ul class="xb-item--meta ul_li mb-20">
                                            <li><img src="{{ asset('website/assets/img/icon/user.svg') }}"
                                                    alt="">By Andrew
                                            </li>
                                            <li><img src="{{ asset('website/assets/img/icon/calendar.svg') }}"
                                                    alt="">16
                                                September 2023</li>
                                        </ul>
                                        <h3 class="xb-item--title border-effect"><a href="blog-single.html">Essential
                                                documents for a successful visa application..</a></h3>
                                        <a class="xb-item--link" href="blog-single.html">Read the
                                            article<span><img
                                                    src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
                                                    alt=""></span></a>
                                    </div>
                                    <a class="xb-overlay xb-overlay-link" href="blog-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-blog">
                                <div class="xb-item--inner">
                                    <div class="xb-item--img">
                                        <a href="blog-single.html"><img
                                                src="{{ asset('website/assets/img/blog/img_03.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <a class="xb-item--category color-3" href="#!">Consulting</a>
                                        <ul class="xb-item--meta ul_li mb-20">
                                            <li><img src="{{ asset('website/assets/img/icon/user.svg') }}"
                                                    alt="">By Kurtz</li>
                                            <li><img src="{{ asset('website/assets/img/icon/calendar.svg') }}"
                                                    alt="">22 August
                                                2023</li>
                                        </ul>
                                        <h3 class="xb-item--title border-effect"><a href="blog-single.html">A
                                                guide to
                                                navigating student visas tips for success..</a></h3>
                                        <a class="xb-item--link" href="blog-single.html">Read the
                                            article<span><img
                                                    src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
                                                    alt=""></span></a>
                                    </div>
                                    <a class="xb-overlay xb-overlay-link" href="blog-single.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-blog-bg" data-bg-color="#EDF3F5" data-background="assets/img/bg/blog_bg.png')}}">
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end -->

        <!-- newsletter start -->
        <section class="newsletter">
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
                                <form class="xb-item--form" action="#!">
                                    <input type="text" placeholder="Your e-mail address">
                                    <button class="thm-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="xb-newsletter__img">
                        <img src="{{ asset('website/assets/img/bg/newsletter_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter end -->

        <!-- contact start -->
        <section class="contact contact-pt gray-bg">
            <div class="container">
                <div class="xb-contact pos-rel">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="xb-item--inner">
                                <div class="xb-item--holder mb-25">
                                    <span><img src="{{ asset('website/assets/img/icon/n_pad.svg') }}"
                                            alt="">Contact Us</span>
                                    <h3>Do you have questions or went more <br> information?</h3>
                                </div>
                                <form class="xb-item--form contact-from" action="#!">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="{{ asset('website/assets/img/icon/c_user.svg') }}"
                                                        alt=""></span>
                                                <input type="text" placeholder="Goladria Gomez">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="{{ asset('website/assets/img/icon/c_mail.svg') }}"
                                                        alt=""></span>
                                                <input type="text" placeholder="e.visa@services.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="{{ asset('website/assets/img/icon/c_select.svg') }}"
                                                        alt=""></span>
                                                <select name="select" id="nice-select">
                                                    <option value="1">Student Visa</option>
                                                    <option value="2">Tourist Visa</option>
                                                    <option value="3">Commercial Visa</option>
                                                    <option value="4">Residence Visa</option>
                                                    <option value="4">Working Visa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="xb-item--field">
                                                <span><img src="{{ asset('website/assets/img/icon/c_call.svg') }}"
                                                        alt=""></span>
                                                <input type="text" placeholder="+888 -8867 3333">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="xb-item--field">
                                                <span><img src="{{ asset('website/assets/img/icon/c_message.svg') }}"
                                                        alt=""></span>
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="thm-btn" type="submit">Send Message</button>
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
        <!-- contact end -->

    </main>
@endsection
