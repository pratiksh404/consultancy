<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.index');
    }

    // Teams
    public function team(Team $team)
    {
        return view('website.pages.team.show', compact('team'));
    }

    // Testimonial
    public function testimonial(Testimonial $testimonial)
    {
        return view('website.pages.testimonial.show', compact('testimonial'));
    }
}
