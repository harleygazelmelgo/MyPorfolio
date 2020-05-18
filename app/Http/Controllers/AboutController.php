<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view ('layouts.aboutme');
    }

    public function projects() {
        return view ('layouts.projects');
    }

    public function contact() {
        return view ('layouts.contact');
    }


}
