<?php

namespace App\Http\Controllers;

use App\Models\Air;
use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $air = Air::all();
        return view('air.index')->with('airs', $air);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $air = Air::all();
        $id = $air;
        return view('air.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $this->authorize('create', Air::class);

        $validateData = $request ->validate([
            'jenis_air' => 'required|unique:airs',
        ]);

       

        $air = new Air();
        $air->id = Str::uuid();
        $air->jenis_air = $validateData['jenis_air'];
        $air->save();
        return redirect()->route('air.index')->with('success',"Data ".$validateData['jenis_air']. " berhasil disimpan");

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
    public function edit(Air $air)
    {
        return view('air.edit')->with('air', $air);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Air $air)
    {
        $validateData = $request ->validate([
            'jenis_air' => 'required|unique:airs',
        ]);


        $air->id = Str::uuid();
        $air->jenis_air = $validateData['jenis_air'];
        $air->save();
        return redirect()->route('air.index')->with('success',"Data ".$validateData['jenis_air']. " berhasil disimpan");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Air $air)
    {
        $air->delete();
        return redirect()->route('air.index')->with('success', 'Data berhasil dihapus');
    }
}
