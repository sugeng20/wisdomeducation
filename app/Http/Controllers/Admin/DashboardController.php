<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Jabatan;
use App\Models\Kelas;
use App\Models\Kreasi;
use App\Models\MataPelajaran;
use App\Models\Sekolah;
use App\Models\Unduhan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['guru'] = User::where('role', 'GURU')->count();
        $data['kelas'] = Kelas::count();
        $data['sekolah'] = Sekolah::count();
        $data['faq'] = Faq::count();
        $data['jabatan'] = Jabatan::count();
        $data['mata-pelajaran'] = MataPelajaran::count();
        $data['unduhan'] = Unduhan::count();
        $data['wadah-kreasi'] = Kreasi::count();
        return view('pages.admin.dashboard.index', compact('data'));
    }
}
