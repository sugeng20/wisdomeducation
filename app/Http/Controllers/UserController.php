<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('pages.user.home');
    }

    public function about()
    {
        return view('pages.user.about');
    }

    public function faq()
    {
        return view('pages.user.faq');
    }

    public function contact()
    {
        return view('pages.user.contact');
    }

}
