<div>
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" style="height:70vh;overflow-y:auto">
                        @if (!is_null($inquiries) ? $inquiries->count() > 0 : false)
                            <div class="row">
                                @foreach ($inquiries as $inquiry)
                                    @if (!is_null($inquiry->inquiryable))
                                        <div class="col-xxl-4 col-md-6" style="height: 40vh">
                                            <div class="project-box">
                                                <div class="inquiry-detail">
                                                    <h6>{{ $inquiry->created_at->toDateString() . ' - ' . $inquiry->created_at->diffForHumans() }}
                                                    </h6>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p>{{ $inquiry->inquiryable->name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row details">
                                                        <div class="col-6"><span>Name</span></div>
                                                        <div class="col-6 text-primary">
                                                            <b>{{ $inquiry->name }}</b>
                                                        </div>
                                                        <div class="col-6"> <span>Email</span></div>
                                                        <div class="col-6 text-primary">
                                                            <b><a
                                                                    href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></b>
                                                        </div>
                                                        <div class="col-6"> <span>Contact</span></div>
                                                        <div class="col-6 text-primary"><b><a
                                                                    href="tel:{{ $inquiry->phone }}">{{ $inquiry->phone }}</a></b>
                                                        </div>
                                                        <div class="col-12" style="height: 20vh;overflow-y:auto">
                                                            <p>
                                                                {{ $inquiry->message }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            {{ $inquiries->links() }}
                        @else
                            <div class="container-fluid p-0 m-0">
                                <div class="comingsoon comingsoon-bgimg"
                                    style="background: url({{ asset('adminetic/static/free-inquiry-bg.jpg') }});background-repeat: no-repeat;background-size: cover;">
                                    <div class="comingsoon-inner text-center" style="font-size:30px">
                                        No Inquiries Yet
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
