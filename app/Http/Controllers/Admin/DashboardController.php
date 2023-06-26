<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['guru'] = User::where('role', 'GURU')->count();
        return view('pages.admin.dashboard.index', compact('data'));
    }
}
