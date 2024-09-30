<div>
    @if (count(branches() ?? []) > 0)
        <div class="row footer-contact">
            @foreach (branches()->chunk(3) as $group)
                @if (count($group ?? []) > 0)
                    @foreach ($group as $branch)
                        <div class="col-lg-{{ 12 / count($group) }}">
                            <div class="card branch-contact">
                                <div class="card-body">
                                    <span class="branch-contact-title">
                                        {{ $branch->name ?? '' }}
                                    </span>
                                    @if (!is_null($branch->address))
                                        <ul class="branch-contact-list-group">
                                            <li class="branch-contact-list"><b>{{ $branch->address }}</b></li>
                                        </ul>
                                    @endif

                                    <ul class="branch-contact-list-group">
                                        @if (count($branch->emails ?? []) > 0)
                                            @foreach ($branch->emails as $branch_email)
                                                @if (isset($branch_email['value']) && isset($branch_email['title']))
                                                    <li class="branch-contact-list">
                                                        <span style="font-weight: bold">Email : </span>
                                                        <a href="mailto:{{ $branch_email['value'] }}">
                                                            {{ $branch_email['value'] . ' ( ' . $branch_email['title'] . ' )' }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if (count($branch->phones ?? []) > 0)
                                            @foreach ($branch->phones as $branch_phone)
                                                @if (isset($branch_phone['value']) && isset($branch_phone['title']))
                                                    <li class="branch-contact-list">
                                                        <span style="font-weight: bold">Contact : </span>
                                                        <a href="tel:{{ $branch_phone['value'] }}">
                                                            {{ $branch_phone['value'] . ' ( ' . $branch_phone['title'] . ' )' }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    @endif
</div>
