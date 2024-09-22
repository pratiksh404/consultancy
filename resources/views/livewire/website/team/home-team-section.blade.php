<div>
    @if ($teams->count() > 0)
        <section class="team pb-120">
            <div class="container">
                <div class="team-wrap pos-rel">
                    <div class="row mt-none-30">
                        <div class="col-xl-6 mt-30">
                            <div class="sec-title mb-45">
                                <h2 class="mb-40 wow skewIn">Our trusted immigration <br> <span> support
                                        team</span>
                                </h2>
                                <p>At the heart of our commitment to providing exceptional immigration solutions
                                    stands</p>
                            </div>
                        </div>
                        @foreach ($teams as $team)
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                                <div class="xb-team text-center">
                                    <div class="xb-item--inner" data-parallax='{"scale" : 1}'>
                                        <div class="xb-item--img" style="height: 400px;overflow:hidden">
                                            <img src="{{ $team->image }}" alt="{{ $team->name }}"
                                                style="object-fit: cover">
                                        </div>
                                        <div class="xb-item--holder">
                                            <h3 class="xb-item--name"><a
                                                    href="{{ route('website.team', ['team' => $team->slug]) }}">{{ $team->name }}</a>
                                            </h3>
                                            <span class="xb-item--designation">{{ $team->designation }}</span>
                                        </div>
                                        @if (count($team->social_medias ?? []) > 0)
                                            <ul class="xb-item--social list-unstyled">
                                                @foreach ($team->social_medias as $name => $link)
                                                    @if (!is_null($link))
                                                        <li><a href="{{ $link }}" target="_blank"><i
                                                                    class="{{ config('consultancy.social_media.' . $name) }}"></i></a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center pt-2">
                            {{ $teams->links() }}
                        </div>
                    </div>
                    <div class="xb-team-bg">
                        <div class="xb-bg xb-bg--1"></div>
                        <div class="xb-bg xb-bg--2"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
