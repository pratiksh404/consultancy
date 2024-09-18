<div>
    @if (counters()->count() > 0)
        <section class="counter pt-120 pb-120 bg_img"
            data-background="{{ asset('website/assets/img/bg/counter_bg.jpg') }}">
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
                            @foreach (counters() as $counter)
                                <div class="xb-item--item ul_li">
                                    <div class="xb-item--icon">
                                        <img src="{{ $counter->icon_image }}" alt="{{ $counter->name }}">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h2 class="xb-item--number"><span class="xbo"
                                                data-count="{{ $counter->count }}">{{ $counter->count }}</span><span
                                                class="suffix">{{ $counter->suffix }}</span></h2>
                                        <h5 class="xb-item--title">{{ $counter->name }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
