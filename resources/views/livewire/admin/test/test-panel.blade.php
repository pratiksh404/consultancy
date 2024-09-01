<div>
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <button class="btn btn-light btn-air-light" style="width:100%;height:90%;">
                                <i class="fa fa-plus text-muted" style="font-size: 30px"></i></button>
                        </div>
                        @foreach ($tests as $test)
                            <div class="col-xxl-4 col-md-6">
                                <div class="project-box"><span
                                        class="badge badge-primary">{{ $test->course->name }}</span>
                                    <h6>{{ toBS(\Carbon\Carbon::create($test->exam_date)) }}</h6>
                                    <div class="media">
                                        <div class="media-body">
                                            <p>{{ \Carbon\Carbon::create($test->exam_date)->isPast() ? \Carbon\Carbon::create($test->exam_date)->toDateString() : \Carbon\Carbon::create($test->exam_date)->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="row details">
                                        <div class="col-6"><span>Issues </span></div>
                                        <div class="col-6 text-primary">12 </div>
                                        <div class="col-6"> <span>Resolved</span></div>
                                        <div class="col-6 text-primary">5</div>
                                        <div class="col-6"> <span>Comment</span></div>
                                        <div class="col-6 text-primary">7</div>
                                    </div>
                                    <div class="customers">
                                        <ul>
                                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                    src="../assets/images/user/3.jpg" alt=""
                                                    data-original-title="" title=""></li>
                                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                    src="../assets/images/user/5.jpg" alt=""
                                                    data-original-title="" title=""></li>
                                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                    src="../assets/images/user/1.jpg" alt=""
                                                    data-original-title="" title=""></li>
                                            <li class="d-inline-block ms-2">
                                                <p class="f-12">+10 More</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="project-status mt-4">
                                        <div class="media mb-0">
                                            <p>70% </p>
                                            <div class="media-body text-end"><span>Done</span></div>
                                        </div>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar-animated bg-primary progress-bar-striped"
                                                role="progressbar" style="width: 70%" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-xxl-4 col-md-6">
                            <div class="project-box"><span class="badge badge-success">Done</span>
                                <h6>Universal admin Design</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle"
                                        src="../assets/images/user/3.jpg" alt="" data-original-title=""
                                        title="">
                                    <div class="media-body">
                                        <p>Envato, australia</p>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <div class="row details">
                                    <div class="col-6"><span>Issues </span></div>
                                    <div class="col-6 text-success">24</div>
                                    <div class="col-6"> <span>Resolved</span></div>
                                    <div class="col-6 text-success">24</div>
                                    <div class="col-6"> <span>Comment</span></div>
                                    <div class="col-6 text-success">40</div>
                                </div>
                                <div class="customers">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/3.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/5.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/1.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block ms-2">
                                            <p class="f-12">+3 More</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-status mt-4">
                                    <div class="media mb-0">
                                        <p>100% </p>
                                        <div class="media-body text-end"><span>Done</span></div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar-animated bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="project-box"><span class="badge badge-success">Done</span>
                                <h6>Poco admin Design</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle"
                                        src="../assets/images/user/3.jpg" alt="" data-original-title=""
                                        title="">
                                    <div class="media-body">
                                        <p>Envato, australia</p>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <div class="row details">
                                    <div class="col-6"><span>Issues </span></div>
                                    <div class="col-6 text-success">40</div>
                                    <div class="col-6"> <span>Resolved</span></div>
                                    <div class="col-6 text-success">40</div>
                                    <div class="col-6"> <span>Comment</span></div>
                                    <div class="col-6 text-success">20</div>
                                </div>
                                <div class="customers">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/3.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/5.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/1.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block ms-2">
                                            <p class="f-12">+2 More</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-status mt-4">
                                    <div class="media mb-0">
                                        <p>100% </p>
                                        <div class="media-body text-end"><span>Done</span></div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar-animated bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="project-box"><span class="badge badge-success">Done</span>
                                <h6>Universal admin Design</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle"
                                        src="../assets/images/user/3.jpg" alt="" data-original-title=""
                                        title="">
                                    <div class="media-body">
                                        <p>Envato, australia</p>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <div class="row details">
                                    <div class="col-6"><span>Issues </span></div>
                                    <div class="col-6 text-success">24</div>
                                    <div class="col-6"> <span>Resolved</span></div>
                                    <div class="col-6 text-success">24</div>
                                    <div class="col-6"> <span>Comment</span></div>
                                    <div class="col-6 text-success">40</div>
                                </div>
                                <div class="customers">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/3.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/5.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/1.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block ms-2">
                                            <p class="f-12">+3 More</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-status mt-4">
                                    <div class="media mb-0">
                                        <p>100% </p>
                                        <div class="media-body text-end"><span>Done</span></div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar-animated bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="project-box"><span class="badge badge-primary">Doing</span>
                                <h6>Endless admin Design</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle"
                                        src="../assets/images/user/3.jpg" alt="" data-original-title=""
                                        title="">
                                    <div class="media-body">
                                        <p>Themeforest, australia</p>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <div class="row details">
                                    <div class="col-6"><span>Issues </span></div>
                                    <div class="col-6 text-primary">12 </div>
                                    <div class="col-6"> <span>Resolved</span></div>
                                    <div class="col-6 text-primary">5</div>
                                    <div class="col-6"> <span>Comment</span></div>
                                    <div class="col-6 text-primary">7</div>
                                </div>
                                <div class="customers">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/3.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/5.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/1.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block ms-2">
                                            <p class="f-12">+10 More</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-status mt-4">
                                    <div class="media mb-0">
                                        <p>70% </p>
                                        <div class="media-body text-end"><span>Done</span></div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar-animated bg-primary progress-bar-striped"
                                            role="progressbar" style="width: 70%" aria-valuenow="10"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="project-box"><span class="badge badge-success">Done</span>
                                <h6>Poco admin Design</h6>
                                <div class="media"><img class="img-20 me-1 rounded-circle"
                                        src="../assets/images/user/3.jpg" alt="" data-original-title=""
                                        title="">
                                    <div class="media-body">
                                        <p>Envato, australia</p>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <div class="row details">
                                    <div class="col-6"><span>Issues </span></div>
                                    <div class="col-6 text-success">40</div>
                                    <div class="col-6"> <span>Resolved</span></div>
                                    <div class="col-6 text-success">40</div>
                                    <div class="col-6"> <span>Comment</span></div>
                                    <div class="col-6 text-success">20</div>
                                </div>
                                <div class="customers">
                                    <ul>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/3.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/5.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                src="../assets/images/user/1.jpg" alt=""
                                                data-original-title="" title=""></li>
                                        <li class="d-inline-block ms-2">
                                            <p class="f-12">+2 More</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-status mt-4">
                                    <div class="media mb-0">
                                        <p>100% </p>
                                        <div class="media-body text-end"><span>Done</span></div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar-animated bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
