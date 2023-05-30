<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mata_pelajaran'] = MataPelajaran::all();
        $data['kelas'] = Kelas::where('guru_id', Auth::user()->id)->get();
        return view('pages.guru.class.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'matpel_id' => 'required',
            'nama_kelas' => 'required|max:255',
            'gambar' => 'required|image',
            'deskripsi' => 'required|max:255',
        ]);

        $kelas = new Kelas;

        $kelas->guru_id = Auth::user()->id;
        $kelas->matpel_id = $request->input('matpel_id');
        $kelas->nama_kelas =  $request->input('nama_kelas');
        $kelas->deskripsi =  $request->input('deskripsi');
        if($request->hasFile('gambar')) {
            $kelas->gambar = $request->file('gambar')->store('gambar');
        }
        $kelas->save();

        return redirect()->route('class-teacher.index')->with('success', 'Berhasil Menambahkan Kelas Baru');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $data['mata_pelajaran'] = MataPelajaran::all();
        return view('pages.guru.class.edit', compact('kelas', 'data'));
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
            'matpel_id' => 'required',
            'nama_kelas' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->guru_id = Auth::user()->id;
        $kelas->matpel_id = $request->input('matpel_id');
        $kelas->nama_kelas =  $request->input('nama_kelas');
        $kelas->deskripsi =  $request->input('deskripsi');
        if($request->hasFile('gambar')) {
            Storage::delete($kelas->gambar);
            $kelas->gambar = $request->file('gambar')->store('gambar');
        }
        $kelas->save();

        return redirect()->route('class-teacher.edit', $id)->with('success', 'Berhasil Mengubah Kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        Storage::delete($kelas->gambar);
        $kelas->delete();
        return redirect()->route('class-teacher.index')->with('success', 'Berhasil Menhapus Kelas');
    }
}
