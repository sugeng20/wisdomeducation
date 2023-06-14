<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $data['kelas'] = Kelas::all();
        return view('pages.user.home', compact('data'));
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
