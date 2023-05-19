<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('pages.frontend.home');
    }

    public function about()
    {
        return view('pages.frontend.about');
    }
}
