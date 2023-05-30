<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::all();
        return view('fakultas.index')
        ->with('dataFakultas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_fakultas' => 'required|min:5|max:40',
            'nama_dekan' => 'required',
            'nama_wakil' => 'required'
        ]);
        // dd($validateData);
        $fakultas = new Fakultas();
        $fakultas->id=Str::uuid();
        $fakultas->nama_fakultas = $validateData['nama_fakultas'];
        $fakultas->nama_dekan = $validateData['nama_dekan'];
        $fakultas->nama_wakil_dekan = $validateData['nama_wakil'];
        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success', "Data Fakultas".$validateData['nama_fakultas']."berhasil disimpan");
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
