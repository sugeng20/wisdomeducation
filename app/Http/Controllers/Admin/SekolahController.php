<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.sekolah.index', [
            'items' => Sekolah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.sekolah.create');
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
            'nama_sekolah' => 'required|max:255',
            'alamat_sekolah' => 'required',
        ]);

        Sekolah::create($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Berhasil Menambahkan Data Sekolah');
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
        $sekolah = Sekolah::findOrFail($id);
        return view('pages.admin.sekolah.edit', compact('sekolah'));
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
            'nama_sekolah' => 'required|max:255',
            'alamat_sekolah' => 'required',
        ]);

        Sekolah::findOrFail($id)->update($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Berhasil Mengubah Data Sekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sekolah::findOrFail($id)->delete();
        return redirect()->route('sekolah.index')->with('success', 'Berhasil Menghapus Data Sekolah');
    }
}
