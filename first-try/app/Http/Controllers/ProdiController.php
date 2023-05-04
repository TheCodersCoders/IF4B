<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProdiController extends Controller
{
    //
    public function index(){
        $prodi = Prodi::all();
        return view('prodi.index')->with('prodis',$prodi);
    }
    public function create()
    {
        return view('prodi.create');
    }
    
    public function store(Request $request)
    {
        // dd($request->nama_dekan);
        // validate data
        $validateData = $request->validate([
            'nama_prodi' => 'required|min:5|max:40',
            'fakultas_id' => 'required',
            
        ]);
        // dd($validateData);
        $prodi = new Prodi();
        $prodi->id=Str::uuid();
        $prodi->nama_fakultas = $validateData['nama_prodi'];
        $prodi->uuid = $validateData['fakultas_id'];
        $prodi->save();
        return redirect()->route('fakultas.index')->with('success', "Data Fakultas".$validateData['nama_fakultas']."berhasil disimpan");
    }
}
