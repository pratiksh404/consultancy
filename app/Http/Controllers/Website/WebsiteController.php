<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;

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
}
