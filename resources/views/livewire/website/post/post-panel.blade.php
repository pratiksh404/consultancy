<div>
    <!-- blog start -->
    <section class="blog pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-wrapper">
                        @foreach ($posts as $post)
                            <article class="single-post-item">
                                <div class="post-thumbnail-wrapper">
                                    <a href="blog-single.html"><img src="{{ $post->image }}"
                                            alt="{{ $post->meta_name ?? $post->name }}"></a>
                                </div>
                                <div class="post-content-wrapper">
                                    <ul class="post-meta ul_li">
                                        <li><span><i class="far fa-user"></i><span
                                                    class="author vcard">{{ $post->author->name }}</span></span>
                                        </li>
                                        {{-- <li><a href="#!"><i class="far fa-comments"></i> Comments (3)</a></li> --}}
                                        <li><span class="posted-on"><i class="far fa-calendar-check"></i> <a
                                                    href="#!">{{ $post->created_at->toFormattedDateString() }}</a></span>
                                        </li>
                                    </ul>
                                    <h3 class="post-title border_effect"><a
                                            href="{{ route('website.post', ['post' => $post->slug]) }}">{{ $post->optimized_title }}</a>
                                    </h3>
                                    <div class="post-excerpt">
                                        <p>
                                            {{ $post->excerpt }}
                                        </p>
                                    </div>
                                    <div class="post-read-more">
                                        <a class="thm-btn"
                                            href="{{ route('website.post', ['post' => $post->slug]) }}">Read More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget">
                            <h3 class="widget-title">Search</h3>
                            <form class="widget__search" wire:submit.prevent="render">
                                <input type="text" wire:model.debounce.500ms="search"
                                    placeholder="Search your keyword">
                                <button><img src="{{ asset('website/assets/img/icon/search.svg') }}"
                                        alt=""></button>
                            </form>
                        </div>
                        @if ($featured_positioned_posts->count() > 0)
                            <div class="widget">
                                <h3 class="widget-title">Related Posts</h3>
                                <div class="widget__post">
                                    @foreach ($featured_positioned_posts as $featured_positioned_post)
                                        <div class="widget__post-item ul_li">
                                            <div class="post-thumb">
                                                <a href="blog-single.html"><img
                                                        src="{{ $featured_positioned_post->image }}"
                                                        alt="{{ $featured_positioned_post->meta_name ?? $featured_positioned_post->name }}"></a>
                                            </div>
                                            <div class="post-content">
                                                <span
                                                    class="post-date">{{ $featured_positioned_post->created_at->toFormattedDateString() }}
                                                </span>
                                                <h4 class="post-title border-effect-2"><a
                                                        href="{{ route('website.post', ['post' => $featured_positioned_post->slug]) }}">{{ $featured_positioned_post->optimized_title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if ($categories->count() > 0)
                            <div class="widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="widget__category list-unstyled">
                                    @foreach ($categories as $category)
                                        <li><a href="#!" wire:click="$set('category_id',{{ $category->id }})"><i
                                                    class="far fa-arrow-up"></i> <span
                                                    style="{{ $category->id == $category_id ? 'font-weight:bold' : '' }}">{{ $category->name }}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($tags->count() > 0)
                            <div class="widget">
                                <h3 class="widget-title">Tags</h3>
                                <div class="tagcloud">
                                    @foreach ($tags as $tag)
                                        <a href="#!" wire:click="$set('tag_id',{{ $tag->id }})"
                                            style="{{ $tag->id == $tag_id ? 'background-color:black;color:white' : '' }}">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{-- <div class="widget widget-banner text-center bg_img"
                            data-background="{{ asset('website/assets/img/bg/b_bg.jpg') }}">
                            <img class="mb-40" src="{{ asset('website/assets/img/icon/b_icon.png') }}" alt="">
                            <h4>Assured Approval – <br> Guaranteed</h4>
                            <a class="thm-btn" href="#!">Get in Touch</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->
</div>
