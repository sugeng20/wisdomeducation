<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unduhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnduhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.unduhan.index', [
            'items' => Unduhan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.unduhan.create');
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
            'judul' => 'required|max:255',
            'link' => 'required'
        ]);

        $data = $request->all();
        if($request->hasFile('cover_gambar')) {
            $data['cover_gambar'] = $request->file('cover_gambar')->store('gambar');
        }
        Unduhan::create($data);

        return redirect()->route('unduhan.index')->with('success', 'Berhasil Menambahkan Data Unduhan');
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
        $unduhan = Unduhan::findOrFail($id);
        return view('pages.admin.unduhan.edit', compact('unduhan'));
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
            'judul' => 'required|max:255',
            'link' => 'required'
        ]);

        $unduhan = Unduhan::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('cover_gambar')) {
            Storage::delete($unduhan->cover_gambar);
            $data['cover_gambar'] = $request->file('cover_gambar')->store('gambar');
        }
        $unduhan->update($data);

        return redirect()->route('unduhan.index')->with('success', 'Berhasil Mengubah Data Unduhan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unduhan::findOrFail($id)->delete();
        return redirect()->route('unduhan.index')->with('success', 'Berhasil Menghapus Data Unduhan');
    }
}
