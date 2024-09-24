<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
use App\Models\Admin\Visa;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.index');
    }

    // Team
    public function team(Team $team)
    {
        return view('website.pages.team.show', compact('team'));
    }

    // Testimonial
    public function testimonial(Testimonial $testimonial)
    {
        return view('website.pages.testimonial.show', compact('testimonial'));
    }

    // Visa
    public function visa(Visa $visa)
    {
        return view('website.pages.visa.show', compact('visa'));
    }

    // Service
    public function service(Service $service)
    {
        return view('website.pages.service.show', compact('service'));
    }

    // Country
    public function country(Country $country)
    {
        return view('website.pages.country.show', compact('country'));
    }
}
