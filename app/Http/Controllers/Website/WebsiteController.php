<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Candidate;
use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\Page;
use App\Models\Admin\Post;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use App\Models\Admin\Test;
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

    // Course
    public function course(Course $course)
    {
        return view('website.pages.course.show', compact('course'));
    }

    // Test
    public function test(Test $test)
    {
        return view('website.pages.test.show', compact('test'));
    }

    // Page
    public function page(Page $page)
    {
        return view('website.pages.others.page', compact('page'));
    }

    //Post
    public function posts()
    {
        $query = Post::published()->active()->latest();

        return view('website.pages.post.index', compact('query'));
    }

    public function post(Post $post)
    {
        return view('website.pages.post.show', compact('post'));
    }

    public function verify(Test $test, Candidate $candidate)
    {
        $candidate->verify();

        return view('mail.test.confirmation-mail', compact('test', 'candidate'));
    }

    public function result(Test $test, Candidate $candidate)
    {
        $candidate->verify();
        $candidate_ids = [$candidate->id];

        return view('admin.layouts.modules.test.results.report_card', compact('test', 'candidate_ids'));
    }
}
