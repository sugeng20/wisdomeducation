<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kreasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KreasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guruId = Guru::where('users_id', Auth::user()->id)->firstOrFail()->id;
        $data['kreasi'] = Kreasi::where('guru_id', $guruId)->get();
        return view('pages.guru.kreasi.index', compact('data'));
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
            'nama_ide' => 'required|max:255"',
            'link' => 'required'
        ]);
        $data = $request->all();
        $guruId = Guru::where('users_id', Auth::user()->id)->firstOrFail()->id;
        $data['guru_id'] = $guruId;
        Kreasi::create($data);

        return redirect()->route('kreasi.index')->with('success', 'Berhasil menambahkan wadah kreasi');
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
        $kreasi = Kreasi::findOrFail($id);
        return view('pages.guru.kreasi.edit', compact('kreasi'));
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
            'nama_ide' => 'required|max:255"',
            'link' => 'required'
        ]);
        $data = $request->all();
        Kreasi::findOrFail($id)->update($data);

        return redirect()->route('kreasi.index')->with('success', 'Berhasil mengubah wadah kreasi');
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
        return redirect()->route('kreasi.index')->with('success', 'Berhasil menghapus wadah kreasi');
    }
}
