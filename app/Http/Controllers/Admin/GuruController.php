<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.guru.index', [
            'items' => Guru::with(['sekolah', 'jabatan'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['jabatan'] = Jabatan::all();
        $data['sekolah'] = Sekolah::all();
        return view('pages.admin.guru.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect()->route('guru.index')->with('success', 'Berhasil menambahkan data guru baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('pages.admin.guru.show', compact('guru'));
    }

    public function gantiPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|max:255|same:konfirmasi_password',
            'konfirmasi_password' => 'required|max:255'
        ]);

        User::findOrFail($id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('guru.index')->with('success', 'Berhasil  Mengubah Password User');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['jabatan'] = Jabatan::all();
        $data['sekolah'] = Sekolah::all();
        $guru = Guru::with('user')->findOrFail($id);
        return view('pages.admin.guru.edit', compact('data', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required|max:255',
            'email' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'jabatan_id' => 'required',
            'sekolah_id' => 'required'
        ]);

        Guru::findOrFail($id)->update([
            'nama_guru' => $request->input('nama_guru'),
            'email' => $request->input('email'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'no_hp' => $request->input('no_hp'),
            'jabatan_id' => $request->input('jabatan_id'),
            'sekolah_id' => $request->input('sekolah_id'),
        ]);

        return redirect()->route('guru.index')->with('success', 'Berhasil mengubat data guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::findOrFail($id)->delete();
        return redirect()->route('guru.index')->with('success', 'Berhasil menghapus data guru');
    }
}
