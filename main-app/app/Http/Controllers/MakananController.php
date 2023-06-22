<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = Makanan::all();
        return view('makanan.index')->with('makanans', $makanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makanan = Makanan::all();
        $id = $makanan;
        return view('makanan.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Makanan::class);

        $validateData = $request ->validate([
            'jenis_makanan' => 'required|unique:makanans',
        ]);

      

        $makanan = new Makanan();
        $makanan->id = Str::uuid();
        $makanan->jenis_makanan = $validateData['jenis_makanan'];
        $makanan->save();
        return redirect()->route('makanan.index')->with('success',"Data ".$validateData['jenis_makanan']. " berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan)
    {
        return view('makanan.edit')->with('makanan', $makanan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan)
    {
        $validateData = $request ->validate([
            'jenis_makanan' => 'required|unique:makanans',
        ]);
        $makanan->id = Str::uuid();
        $makanan->jenis_makanan = $validateData['jenis_makanan'];
        $makanan->save();
        return redirect()->route('makanan.index')->with('success',"Data ".$validateData['jenis_makanan']. " berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        return redirect()->route('makanan.index')->with('success', 'Data berhasil dihapus');
    }
}
