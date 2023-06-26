<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $data['kelas'] = Kelas::all();
        return view('pages.user.home', compact('data'));
    }

    public function about()
    {
        if(Auth::user()->role == 'GURU') {
            $layout = 'guru';
        } else {
            $layout = 'user';
        }
        return view('pages.user.about', compact('layout'));
    }

    public function faq()
    {
        if(Auth::user()->role == 'GURU') {
            $layout = 'guru';
        } else {
            $layout = 'user';
        }
        return view('pages.user.faq', compact('layout'));
    }

    public function contact()
    {
        if(Auth::user()->role == 'GURU') {
            $layout = 'guru';
        } else {
            $layout = 'user';
        }
        return view('pages.user.contact', compact('layout'));
    }

}
