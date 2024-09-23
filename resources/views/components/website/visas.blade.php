<div>
    @if (visas()->count() > 0)
        <section class="visa type pb-135 mt-4">
            <div class="container">
                <div class="service-wrap pos-rel">
                    <div class="service-img-wrap">
                        <div class="service-bg" data-background="((asset('website/assets/img/bg/service_bg.png')}}"></div>
                        <div class="service-img wow skewIn" data-wow-delay="100ms"
                            data-background="{{ asset('website/assets/img/service/img_01.jpg') }}"></div>
                    </div>
                    <div class="sec-title wow skewIn pt-120">
                        <h2 class="mb-60">Visa types and eligibility <br> <span>assessment</span></h2>
                    </div>
                    <div class="row justify-content-md-center mt-none-30">
                        @foreach (visas() as $visa)
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-service">
                                    <div class="xb-item--inner">
                                        <div
                                            class="xb-item--icon {{ !$loop->first ? 'color' . rand(2, 5) : '' }} mb-50">
                                            <img src="{{ $visa->icon }}" alt="icon">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="xb-item--title mb-20"><a
                                                    href="{{ route('website.visa', $visa->slug) }}">{{ $visa->name }}</a>
                                            </h3>
                                            <div class="xb-item--description">
                                                {{ $visa->excerpt }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($loop->iteration == 2)
                                <div class="col-lg-4 mt-30"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
