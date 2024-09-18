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
        <x-website.counters />
        <!-- counter end -->

        <!-- country start -->
        <x-website.countries />
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
        <x-website.testimonials />
        <!-- testimonial end -->

        <!-- faq start -->
        <x-website.faqs />
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
                                            article<span><img src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
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
                                            article<span><img src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
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
                                            article<span><img src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
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
