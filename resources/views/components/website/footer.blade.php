<footer class="site-footer gray-bg pt-65">
    <div class="container">
        <div class="row mt-none-30 pb-60">
            <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                <div class="footer__widget">
                    <h3 class="widget-title">Do you have questions or went more information? Contact us now
                    </h3>
                    <ul class="footer__cta list-unstyled mt-50">
                        <li class="ul_li"><span><img src="{{ asset('website/assets/img/icon/f_call.svg') }}"
                                    alt=""></span> <a href="tel:{{ website('phone') }}"
                                style="color: black;font-size: 18px" style="mx-1">{{ website('phone') }}</a>
                        </li>
                        <li class="ul_li"><span><img src="{{ asset('website/assets/img/icon/f_mail.svg') }}"
                                    alt=""></span> <a href="mailto:{{ website('email') }}"
                                style="color: black;font-size: 18px" class="mx-1">{{ website('email') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @if (countries()->count() > 0)
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Countries</h3>
                        <ul class="footer__links list-unstyled">
                            @foreach (countries() as $footer_country)
                                <li><a href="{{ route('website.country', $footer_country->slug) }}"><span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                                    fill="#B1B4BA" />
                                            </svg></span>{{ $footer_country->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if (services()->count() > 0)
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="footer__links list-unstyled">
                            @foreach (services() as $footer_service)
                                <li><a href="{{ route('website.service', $footer_service->slug) }}"
                                        style="white-space: nowrap"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                                    fill="#B1B4BA" />
                                            </svg></span>{{ $footer_service->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if (courses()->count() > 0)
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Our Courses</h3>
                        <ul class="footer__links list-unstyled">
                            @foreach (courses() as $footer_course)
                                <li><a href="{{ route('website.course', $footer_course->slug) }}"><span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                                    fill="#B1B4BA" />
                                            </svg></span>{{ $footer_course->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <div class="footer__copyright ul_li_between">
            <div class="footer__copyright-text mt-15">
                Copyright © {{ \Carbon\Carbon::now()->year }} {{ website('name') }} All rights reserved.
            </div>
            <div class="footer__copyright-img mt-20">
                <ul style=" list-style-type: none; 
  padding: 0;
  margin: 0;
  display: flex; ">
                    <li style="margin-right: 15px;"><a style="color: black"
                            href="{{ route('website.testimonials') }}"><span>Testimonials</span></a>
                    <li style="margin-right: 15px;"><a style="color: black"
                            href="{{ route('website.about_us') }}"><span>About Us</span></a>
                    </li>
                    </li>
                    @if ((pages()->count() ?? 0) > 0)
                        @foreach (pages() as $footer_page)
                            <li style="margin-right: 15px;"><a style="color: black"
                                    href="{{ route('website.page', ['page' => $footer_page->slug]) }}"><span>{{ $footer_page->name }}</span></a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
