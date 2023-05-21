<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function SignIn()
    {
        return view('pages.auth.sign-in');
    }

    public function SignUp()
    {
        $data['sekolah'] = Sekolah::all();
        $data['jabatan'] = Jabatan::all();
        return view('pages.auth.sign-up', compact('data'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'nama_guru' => 'required|max:255',
            'email' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'jabatan_id' => 'required',
            'sekolah_id' => 'required'
        ]);

        $user = User::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'role' => 'GURU'
        ]);

        Guru::create([
            'users_id' => $user->id,
            'nama_guru' => $request->input('nama_guru'),
            'email' => $request->input('email'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'no_hp' => $request->input('no_hp'),
            'jabatan_id' => $request->input('jabatan_id'),
            'sekolah_id' => $request->input('sekolah_id'),
        ]);

        return redirect('/sign-in')->with('success', 'Berhasil Daftar Akun, Silahkan masuk menggunakan akun username dan password yang sudah didaftarkan');
    }
}
