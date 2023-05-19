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
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $prodi = Prodi::all();
        return view('prodi.index')->with('prodis',$prodi);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::orderBy('nama_fakultas','ASC')->get();
        return view('prodi.create')->with('fakultas', $fakultas);
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
}
