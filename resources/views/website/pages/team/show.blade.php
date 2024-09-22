@extends('website.layouts.app')

@section('content')
    <x-website.breadcrumb :menus="[
        [
            'name' => 'Our Team',
        ],
        [
            'name' => $team->name,
        ],
    ]" :title="$team->name" />

    <section class="team-signle pt-120 pb-120">
        <div class="container">
            <div class="team-single__inner">
                <div class="team-single__wrap">
                    <div class="row align-items-end">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-single__img text-center">
                                <img src="{{ $team->image }}" alt="{{ $team->name }}" width="450">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-single__info">
                                <h3 class="title">{{ $team->name }}</h3>
                                <ul class="info list-unstyled mb-60">
                                    <li><strong>Responsibility:</strong>{{ $team->designation }}</li>
                                    @if (!is_null($team->experience))
                                        <li><strong>Experience:</strong>{{ $team->experience }} Years</li>
                                    @endif
                                    @if (!is_null($team->email))
                                        <li><strong>Email:</strong><a
                                                href="mailto:{{ $team->email }}">{{ $team->email }}</a></li>
                                    @endif
                                    @if (!is_null($team->phone))
                                        <li><strong>Phone:</strong><a href="tel:{{ $team->phone }}">{{ $team->phone }}</a>
                                        </li>
                                    @endif
                                </ul>
                                @if (count($team->social_medias ?? []) > 0)
                                    <div class="team-single__social">
                                        <h4>Social Media</h4>
                                        <ul class="social ul_li list-unstyled">
                                            @foreach ($team->social_medias as $name => $link)
                                                @if (!is_null($link))
                                                    <li><a href="{{ $link }}" target="_blank"><i
                                                                class="{{ config('consultancy.social_media.' . $name) }}"></i></a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if (!is_null($team->message))
                    <div class="team-single__content">
                        <h3>Message</h3>
                        <p>
                            {!! $team->message !!}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
