<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kreasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WadahKreasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.wadah-kreasi.index', [
            'items' => Kreasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.wadah-kreasi.create');
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
            'nama_ide' => 'required|max:255',
            'link' => 'required',
        ]);
        $data = $request->all();
        $data['guru_id'] = Auth::user()->id;
        Kreasi::create($data);

        return redirect()->route('wadah-kreasi.index')->with('success', 'Berhasil Menambahkan Wadah Kreasi');
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
        $wadahkreasi = Kreasi::findOrFail($id);
        return view('pages.admin.wadah-kreasi.edit', compact('wadahkreasi'));
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
            'nama_ide' => 'required|max:255',
            'link' => 'required',
        ]);

        Kreasi::findOrFail($id)->update($request->all());

        return redirect()->route('wadah-kreasi.index')->with('success', 'Berhasil Mengubah Wadah Kreasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kreasi::findOrFail($id)->delete();
        return redirect()->route('wadah-kreasi.index')->with('success', 'Berhasil Menghapus Wadah Kreasi');
    }
}
