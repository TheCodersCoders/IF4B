<?php

namespace App\Http\Controllers;

use App\Models\Air;
use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class IkanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table_ikan = Ikan::all();
        return view('ikan.index')->with('ikans', $table_ikan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $air = Air::all();
        $id = $air;
        return view('ikan.create', compact('air'));
        return view('ikan.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request ->validate([
            'nama_ikan' => 'required|unique:ikans',
            'deskripsi' => 'required',
            'foto' => 'required|file|image',
            'air_id' => 'required'

        ]);

        $temp = $request->foto->getClientOriginalExtension();
        $nama_foto = $validateData['nama_ikan'] . '.' . $temp;
        $path = $request->foto->storeAs('public/images', $nama_foto);

        $ikan = new Ikan();
        $ikan->id=Str::uuid();
        $ikan->nama_ikan = $validateData['nama_ikan'];
        $ikan->deskripsi = $validateData['deskripsi'];
        $ikan->air_id = $validateData['air_id'];
        $ikan->foto = $nama_foto;
        $ikan->save();

        return redirect()->route('ikan.index')->with('success',"Data ".$validateData['nama_ikan']. " berhasil disimpan");

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
    public function edit(Ikan $ikan)
    {
        return view('ikan.edit')->with('ikan', $ikan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ikan $ikan)
    {
        $validateData = $request ->validate([
            'nama_ikan' => 'required|min:3|max:100',
            'deskripsi' => 'required',
            'foto' => 'required|file|image|max:5000',
            'air_id' => 'required'
        ]);

        $temp = $request->foto->getClientOriginalExtension();
        $nama_foto = $validateData['nama_ikan'] . '.' . $temp;
        $path = $request->foto->storeAs('public/images', $nama_foto);

        $ikan->nama_ikan = $validateData['nama_ikan'];
        $ikan->deskripsi = $validateData['deskripsi'];
        $ikan->air_id = $validateData['air_id'];
        $ikan->foto = $nama_foto;
        $ikan->save();

        return redirect()->route('ikan.index')->with('success',"Data ".$validateData['nama_ikan']. " berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ikan $ikan)
    {
        $ikan->delete();
        return redirect()->route('ikan.index')->with('success', 'Data berhasil dihapus');
    }
}
