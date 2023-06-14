<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelas::with('mataPelajaran')->get();
        return view('pages.guru.home', compact('data'));
    }
}
