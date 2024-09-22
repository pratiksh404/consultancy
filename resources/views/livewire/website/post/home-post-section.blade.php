<div>
    @if ($posts->count() > 0)
        <section class="blog pb-130">
            <div class="container">
                <div class="blog-wrap">
                    <div class="sec-title mb-60 text-center">
                        <h2 class="mb-30 wow skewIn">Cast Your Eyes Upon Our <br> <span> Newest Article</span>
                        </h2>
                        <p>Explore the most recent addition to our informative articles</p>
                    </div>
                    <div class="row justify-content-md-center mt-none-30">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 mt-30">
                                <div class="xb-blog">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--img">
                                            <img src="{{ $post->image }}" alt="{{ $post->meta_name ?? $post->name }}">
                                        </div>
                                        <div class="xb-item--holder">
                                            @if (!is_null($post->category))
                                                <span
                                                    class="xb-item--category {{ !$loop->first ? 'color-' . rand(2, 3) : '' }}">{{ $post->category->name }}</span>
                                            @endif
                                            <ul class="xb-item--meta ul_li mb-20">
                                                <li><img src="{{ getProfilePlaceholder($post->author) }}" width="40"
                                                        alt="">{{ $post->author->name }}
                                                </li>
                                                <li><img src="{{ asset('website/assets/img/icon/calendar.svg') }}"
                                                        alt="created date">{{ $post->created_at->format('d M, Y') }}
                                                </li>
                                            </ul>
                                            <h3 class="xb-item--title border-effect"><a
                                                    href="blog-single.html">{{ $post->optimized_title }}</a></h3>
                                            <a class="xb-item--link" href="blog-single.html">Read the
                                                article<span><img
                                                        src="{{ asset('website/assets/img/icon/right_arrow.svg') }}"
                                                        alt=""></span></a>
                                        </div>
                                        <a class="xb-overlay xb-overlay-link" href="blog-single.html"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                    <div class="xb-blog-bg" data-bg-color="#EDF3F5" data-background="assets/img/bg/blog_bg.png')}}">
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
