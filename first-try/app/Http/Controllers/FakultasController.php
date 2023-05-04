<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fakultas::all();
        return view('fakultas.index')
        ->with('dataFakultas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->nama_dekan);
        // validate data
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
