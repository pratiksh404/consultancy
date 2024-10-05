@extends('website.layouts.app',[
    'title' => $testimonial->name ' Testimonial',
])

@section('schema_org')
    {!! $testimonial->searchSchema() !!}
@endsection


@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Testimonials',
            'route' => route('website.testimonials'),
        ],
    ]" :title="$testimonial->name" />
    <section class="testimonial pt-180 pb-130">
        <div class="container">
            <div class="xb-testimonial__masonry">
                <div class="row grid mt-none-100">
                    <div class="col-lg-12 grid-item mt-100">
                        <div class="xb-testimonial3 style-{{ rand(2, 8) }}">
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
                </div>
            </div>
        </div>
    </section>
@endsection
