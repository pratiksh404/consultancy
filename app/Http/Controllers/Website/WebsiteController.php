<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.index');
    }
}
