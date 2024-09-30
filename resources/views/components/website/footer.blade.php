<footer class="site-footer gray-bg pt-65">
    <div class="container">
        <x-website.branch-contacts />
        @if (gallery_images()->count() > 0)
            <div class="swiper footer-gallery-images">
                <div class="swiper-wrapper d-flex justify-content-center">
                    @foreach (gallery_images() as $gallery_image)
                        <div class="swiper-slide">
                            <a href="{{ $gallery_image->getUrl() }}" data-fancybox="footer-gallery"
                                data-caption="{{ website('name') . ' gallery images' }}">
                                <img src="{{ $gallery_image->getUrl() }}" alt="gallery image">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="footer-partner-association">
            <div class="row">
                <div class="col-lg-6">
                    @if (partners()->count() > 0)
                        <div class="footer-partner">
                            <h5 class="text-start">Partners</h5>
                            <div class="d-flex justify-content-start">
                                @foreach (partners() as $partner)
                                    @if (!is_null($partner->logo))
                                        <a href="{{ $partner->url ?? route('website.about_us') }}"
                                            title="{{ $partner->name }}" target="_blank">
                                            <img src="{{ $partner->logo }}" alt="{{ $partner->name }}"></a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    @if (associations()->count() > 0)
                        <div class="footer-partner">
                            <h5 class="text-end">Associations</h5>
                            <div class="d-flex justify-content-end">
                                @foreach (associations() as $association)
                                    @if (!is_null($association->logo))
                                        <a href="{{ $association->url ?? route('website.about_us') }}"
                                            title="{{ $association->name }}" target="_blank">
                                            <img src="{{ $association->logo }}" alt="{{ $association->name }}"></a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-none-30 pb-60">
            <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                <div class="footer__widget">
                    <h3 class="widget-title">Do you have questions or went more information? Contact us now
                    </h3>
                    <ul class="footer__cta list-unstyled mt-50">
                        <li class="ul_li d-flex justify-content-start"><span><img
                                    src="{{ asset('website/assets/img/icon/f_call.svg') }}" alt=""></span>
                            @foreach (explode(',', website('phone')) as $footer_phone)
                                <a href="tel:{{ $footer_phone }}" style="color: black;font-size: 18px"
                                    class="mx-2">{{ $footer_phone }}</a>
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </li>
                        <li class="ul_li d-flex justify-content-start"><span><img
                                    src="{{ asset('website/assets/img/icon/f_mail.svg') }}" alt=""></span>
                            @foreach (explode(',', website('email')) as $footer_email)
                                <a href="tel:{{ $footer_email }}" style="color: black;font-size: 18px"
                                    class="mx-2">{{ $footer_email }}</a>
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
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
                            href="{{ route('website.posts') }}"><span>News & Articles</span></a>
                    </li>
                    <li style="margin-right: 15px;"><a style="color: black"
                            href="{{ route('website.testimonials') }}"><span>Testimonials</span></a>
                    </li>
                    <li style="margin-right: 15px;"><a style="color: black"
                            href="{{ route('website.about_us') }}"><span>About Us</span></a>
                    </li>

                    @if ((pages()->count() ?? 0) > 0)
                        @foreach (pages()->filter(fn($p) => $p->featured) as $footer_page)
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
