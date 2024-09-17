<div>
    @if (steps()->count() > 0)
        <section class="about pos-rel pb-130">
            <div class="container">
                <div class="sec-title mb-55">
                    <h2 class="mb-30 wow skewIn">Dependable and Trustworthy Visa & <br>
                        <span>Immigration Guidance</span>
                    </h2>
                    <p>Our team of seasoned professionals understands the <br> complexities of immigration laws and
                        visa
                        procedures.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-10">
                        <div class="about__content">
                            <ul class="about-list ul_li list-unstyled">
                                @foreach (steps() as $step)
                                    <li>
                                        <div class="xb-item--inner">
                                            <div
                                                class="xb-item--number {{ !$loop->first ? 'color-' . rand(2, 5) : '' }}">
                                                {{ $loop->iteration }}</div>
                                            <div class="xb-item--holder">
                                                <h3 class="xb-item--title mb-10">{{ $step->name }}</h3>
                                                <div class="xb-item--description">
                                                    {{ $step->excerpt }}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__img">
                <img src="{{ asset('website/assets/img/about/about_img.png') }}" alt="">
            </div>
        </section>
    @endif
</div>
