<div>
    @if (popups()->count() > 0)
        <div x-data="{ currentModal: 0 }">

            @foreach (popups() as $popup)
                @if (!is_null($popup->image) || !is_null($popup->description))
                    <div class="xb-service"
                        style="position: fixed;top: 2vh;left: 20vw;width: 60vw;max-height:90vh;z-index: 99999999;overflow-y:auto"
                        x-show="currentModal === {{ $loop->index }}" x-transition
                        @click.away="currentModal++; if(currentModal >= {{ popups()->count() }}) currentModal = null;">

                        <div class="xb-item--inner">
                            <div style="position: absolute;top:2vh;right:2vw;cursor:pointer"
                                @click="currentModal++; if(currentModal >= {{ popups()->count() }}) currentModal = null;">
                                <span><i class="fa fa-times"></i></span>
                            </div>
                            @if (!is_null($popup->image))
                                <a href="{{ $popup->url ?? '#' }}">
                                    <img src="{{ $popup->image }}" alt="{{ $popup->name }}"
                                        style="width:100%;height:auto">
                                </a>
                            @else
                                @if (!is_null($popup->description))
                                    {!! $popup->description !!}
                                @endif
                            @endif
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
