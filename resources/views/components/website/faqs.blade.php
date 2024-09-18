<div>
    @if (faqs()->count() > 0)
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
                                @foreach (faqs() as $faq)
                                    <li class="accordion block {{ $loop->first ? 'active-block' : '' }}">
                                        <div class="acc-btn">
                                            {!! $faq->question !!}
                                            <span class="arrow"></span>
                                        </div>
                                        <div class="acc_body {{ $loop->first ? 'current' : '' }}">
                                            <div class="content">
                                                {!! $faq->answer !!}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
