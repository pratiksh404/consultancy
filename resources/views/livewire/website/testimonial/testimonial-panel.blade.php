<div>
    @if ($testimonials->count() > 0)
        <section class="testimonial pt-180 pb-130">
            <div class="container">
                <div class="xb-testimonial__masonry">
                    <div class="row grid mt-none-100">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-lg-6 grid-item mt-100">
                                <div class="xb-testimonial3 {{ !$loop->first ? 'style-' . $loop->iteration : '' }}">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--author-info ul_li mb-40">
                                            <div class="xb-item--avatar">
                                                <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}"
                                                    style="width:100%;height:100%;object-fit:cover">
                                            </div>
                                            <div class="xb-item--author">
                                                <h3 class="xb-item--name">{{ $testimonial->name }}</h3>
                                                <span class="xb-item--desig">{{ $testimonial->info() }}</span>
                                            </div>
                                        </div>
                                        <div class="xb-item--content">
                                            {!! $testimonial->message !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $testimonials->links() }}
                </div>
            </div>
        </section>
    @endif
</div>
