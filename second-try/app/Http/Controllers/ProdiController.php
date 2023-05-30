<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index')->with('prodis',$prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::orderBy('nama_fakultas','ASC')->get();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_prodi' => 'required|min:5|max:40|unique:prodi',
            'fakultas_id' => 'required',
        ]);
        // dd($validateData);
        $prodi = new Prodi();
        $prodi->id=Str::uuid();
        $prodi->nama_prodi = $validateData['nama_prodi'];
        $prodi->fakultas_id = $validateData['fakultas_id'];
        $prodi->save();
        return redirect()->route('prodi.index')->with('success', "Data Fakultas".$validateData['nama_prodi']."berhasil disimpan");
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
