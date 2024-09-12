<div>
    <div x-data="{ profile: false }" style="cursor: pointer">
        <div class="project-box" @click="profile = true"><span class="badge badge-primary">{{ $test->course->name }}</span>
            <h6>{{ toBS(\Carbon\Carbon::create($test->test_date)) }}</h6>
            <div class="media">
                <div class="media-body">
                    <p>{{ \Carbon\Carbon::create($test->test_date)->isPast() ? \Carbon\Carbon::create($test->test_date)->toDateString() : \Carbon\Carbon::create($test->test_date)->diffForHumans() }}
                    </p>
                </div>
            </div>
            <div class="row details">
                <div class="col-6"><span>Candidates </span></div>
                <div class="col-6 text-primary">{{ $test->candidates->count() }} </div>
                <div class="col-6"> <span>Attendance </span></div>
                <div class="col-6 text-primary">5</div>
            </div>
            <div class="customers">
                <ul>
                    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg"
                            alt="" data-original-title="" title=""></li>
                    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg"
                            alt="" data-original-title="" title=""></li>
                    <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg"
                            alt="" data-original-title="" title=""></li>
                    <li class="d-inline-block ms-2">
                        <p class="f-12">+10 More</p>
                    </li>
                </ul>
            </div>
            <div class="project-status mt-4">
                <div class="media mb-0">
                    <p>70% </p>
                    <div class="media-body text-end mx-1"><span>Attended</span></div>
                </div>
                <div class="progress" style="height: 5px">
                    <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                        style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card" x-show="profile" @click.outside="profile = false"
            style="position: fixed;width: 90vw; height: 85vh; top: 10vh; right: 5vw;overflow-y:auto;z-index:9999">
            <div class="card-body shadow-lg p-2">
                @livewire('admin.test.test-profile', ['test' => $test], key('profile' . $test->id))
            </div>
        </div>
    </div>
</div>
