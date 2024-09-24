<div>
    @if (courses()->count() > 0)
        <section class="brand  z-1 pos-rel" data-bg-color="#F0F2F6" style="padding: 100px 0">
            <div class="sec-title sec-title--travel text-center mb-20">
                <span class="subtitle">Our Expertise</span>
                <h2>Choose Your Course</h2>
            </div>
            <div class="xb-category-slider swiper-container">
                <div class="swiper-wrapper">
                    @foreach (courses() as $course)
                        <div class="swiper-slide xb-brand xb-brand2">
                            <a class="xb-item--inner" style="height: 30vh"
                                href="{{ route('website.course', ['course' => $course->slug]) }}"><img
                                    src="{{ $course->thumbnail }}" alt="{{ $course->name }}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
