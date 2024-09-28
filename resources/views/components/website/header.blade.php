<div>
    @props(['todays_business_hours' => todays_business_hour()])
    <!-- header start -->
    <header class="site-header header-style-one">
        <div class="header__top-wrap gray-bg">
            <div class="container">
                <div class="header__top ul_li_between">
                    <div class="header__top-cta">
                        <img src="{{ asset('website/assets/img/icon/n_pad.svg') }}" alt=""><span>Help Desk
                            :</span> <a href="tel:{{ website('phone') }}" style="color: black"
                            class="mx-2">{{ website('phone') }}</a>
                    </div>
                    <ul class="header__top-info ul_li">
                        <li><img src="{{ asset('website/assets/img/icon/time.svg') }}" alt="">
                            <b> {{ \Carbon\Carbon::now()->format('l') }} : </b>
                            @if ($todays_business_hours)
                                <span class="text-light">
                                    {{ $todays_business_hours->start()->format('H:i') }} -
                                    {{ $todays_business_hours->end()->format('H:i') }}
                                </span>
                                <span class="text-success mx-1">(Open Now)</span>
                            @else
                                <span class="text-danger mx-1">(Closed Now)</span>
                            @endif
                        </li>
                        <li><img src="{{ asset('website/assets/img/icon/location.svg') }}"
                                alt="">{{ website('address') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__wrap stricky">
            <div class="container">
                <div class="header__inner ul_li_between">
                    <div class="header__logo">
                        <a href="{{ route('website.home') }}"><img src="{{ logo() }}" style="height: 55px"
                                alt="{{ website('name') ?? title() }}"></a>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                <li><a href="{{ route('website.home') }}"
                                        class="{{ request()->routeIs('website.home') ? 'active' : '' }}"><span>Home</span></a>
                                </li>
                                @if ((services()->count() ?? 0) > 0)
                                    <li
                                        class="menu-item-has-children {{ request()->routeIs('website.service.*') ? 'active' : '' }}">
                                        <a href="#!"><span>Services</span></a>
                                        <ul class="submenu">
                                            @foreach (services() as $heading_service)
                                                <li><a
                                                        href="{{ route('website.service', ['service' => $heading_service->slug]) }}"><span>{{ $heading_service->name }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                @if ((countries()->count() ?? 0) > 0)
                                    <li
                                        class="menu-item-has-children {{ request()->routeIs('website.country.*') ? 'active' : '' }}">
                                        <a href="#!"><span>Countries</span></a>
                                        <ul class="submenu">
                                            @foreach (countries() as $heading_country)
                                                <li><a
                                                        href="{{ route('website.country', ['country' => $heading_country->slug]) }}"><span>{{ $heading_country->name }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif

                                @if ((courses()->count() ?? 0) > 0)
                                    <li
                                        class="menu-item-has-children {{ request()->routeIs('website.course.*') ? 'active' : '' }}">
                                        <a href="#!"><span>Courses</span></a>
                                        <ul class="submenu">
                                            @foreach (courses() as $heading_course)
                                                <li><a
                                                        href="{{ route('website.course', ['course' => $heading_course->slug]) }}"><span>{{ $heading_course->name }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif

                                <li><a href="{{ route('website.contact_us') }}"><span>Contact Us</span></a></li>
                                <li class="menu-item-has-children">
                                    <a href="#!"><span>Others</span></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('website.about_us') }}"><span>About Us</span></a></li>
                                        <li><a href="{{ route('website.testimonials') }}"><span>Testimonials</span></a>
                                        </li>
                                        @if ((pages()->count() ?? 0) > 0)
                                            @foreach (pages() as $heading_page)
                                                <li><a
                                                        href="{{ route('website.page', ['page' => $heading_page->slug]) }}"><span>{{ $heading_page->name }}</span></a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="xb-hamburger-menu">
                        <div class="xb-nav-mobile">
                            <div class="xb-nav-mobile-button"><i class="fal fa-bars"></i></div>
                        </div>
                    </div>
                    <ul class="header__action ul_li">
                        <li>
                            <a class="header__search header-search-btn" href="javascript:void(0);">
                                <img src="{{ asset('website/assets/img/icon/search.svg') }}" alt="">Search
                            </a>
                        </li>
                        <li>
                            <div class="header__language">
                                <ul>
                                    <li><a href="#!" class="lang-btn">
                                            <div class="flag"><img
                                                    src="{{ asset('website/assets/img/icon/us_flag.png') }}"
                                                    alt="">
                                            </div>
                                            English
                                            <div class="arrow_down"><img
                                                    src="{{ asset('website/assets/img/icon/arrow_down.svg') }}"
                                                    alt=""></div>
                                        </a>
                                        <ul class="lang_sub_list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#">Bangla</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="xb-header-wrap">
            <div class="xb-header-menu">
                <div class="xb-header-menu-scroll">
                    <div class="xb-menu-close xb-hide-xl xb-close"></div>
                    <div class="xb-logo-mobile xb-hide-xl">
                        <a href="index.html" rel="home"><img src="{{ asset('website/assets/img/logo/logo.svg') }}"
                                alt=""></a>
                    </div>
                    <div class="xb-header-mobile-search xb-hide-xl">
                        <form role="search" action="#">
                            <input type="text" placeholder="Search..." name="s" class="search-field">
                            <button type="submit" class="search-submit">
                            </button>
                        </form>
                    </div>
                    <nav class="xb-header-nav">
                        <ul class="xb-menu-primary clearfix">
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>Home</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html"><span>Immigration</span></a></li>
                                    <li class="menu-item"><a href="home-studient-visa.html"><span>Studient
                                                Visa</span></a></li>
                                    <li class="menu-item"><a href="home-travel-agency.html"><span>Travel
                                                Agency</span></a></li>
                                    <li class="menu-item"><a href="home-rtl.html"><span>Demo RTL</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>Pages</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="services.html"><span>Services</span></a></li>
                                    <li class="menu-item"><a href="service-single.html"><span>Service
                                                Details</span></a></li>
                                    <li class="menu-item"><a href="coaching.html"><span>Coaching</span></a></li>
                                    <li class="menu-item"><a href="coaching-single.html"><span>Coaching
                                                Details</span></a></li>
                                    <li class="menu-item"><a href="visa.html"><span>Visa</span></a></li>
                                    <li class="menu-item"><a href="visa-single.html"><span>Visa Details</span></a>
                                    </li>
                                    <li class="menu-item"><a href="team.html"><span>Team</span></a></li>
                                    <li class="menu-item"><a href="team-single.html"><span>Team Details</span></a>
                                    </li>
                                    <li class="menu-item"><a href="testimonial.html"><span>Testimonials</span></a>
                                    </li>
                                    <li class="menu-item"><a href="faq.html"><span>FAQ</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="about.html"><span>About us</span></a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>Country</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="country.html"><span>Country</span></a></li>
                                    <li class="menu-item"><a href="country-single.html"><span>Country
                                                Details</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>Blog</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog.html"><span>Blog</span></a></li>
                                    <li class="menu-item"><a href="blog-single.html"><span>Blog Details</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="contact.html"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="xb-header-menu-backdrop"></div>
        </div>
    </header>
    <!-- header end -->

    <!-- header search start -->
    <div class="header-search-form-wrapper">
        <div class="xb-search-close xb-close"></div>
        <div class="header-search-container">
            <form role="search" class="search-form" action="#">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
            </form>
        </div>
    </div>


    <div class="body-overlay"></div>
</div>
