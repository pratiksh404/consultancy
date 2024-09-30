@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Blogs, Articles and News',
            'route' => route('website.posts'),
        ],
        [
            'name' => $post->title,
        ],
    ]" title="Post" />
    <section class="blog pt-120 pb-120">
        <div class="container">
            <div class="blog-post-wrapper">
                <article class="post-details">
                    @if (!is_null($post->getFirstMedia('image')))
                        <div class="post-thumb">
                            <img src="{{ $post->image }}" alt="{{ $post->name }}">
                        </div>
                    @endif
                    <ul class="post-meta ul_li">
                        <li><span><i class="far fa-user"></i><span
                                    class="author vcard">{{ $post->author->name }}</span></span>
                        </li>
                        {{-- <li><a href="#!"><i class="far fa-comments"></i> Comments (3)</a></li> --}}
                        <li><span class="posted-on"><i class="far fa-calendar-check"></i> <a
                                    href="#!">{{ $post->created_at->toFormattedDateString() }}</a></span>
                        </li>
                    </ul>
                    <h2>{{ $post->name }}</h2>
                    <p>
                        {!! $post->description !!}
                    </p>
                </article>
                <div class="post-footer mt-10 mb-40 ul_li_between">
                    @if ($post->tags->count() > 0)
                        <div class="post-tags ul_li mt-20">
                            <h5 class="tag-title">Tags:</h5>
                            <span class="tags-links">
                                @foreach ($post->tags as $tag)
                                    <a href="#!" rel="tag">{{ $tag->name }}</a>
                                @endforeach
                            </span>
                        </div>
                    @endif
                    <div class="social-share ul_li mt-20">
                        <h5 class="title">Share:</h5>
                        <ul class="post-share ul_li">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#!">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
