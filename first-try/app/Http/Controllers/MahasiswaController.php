<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index')->with('mahasiswas', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::orderBy('nama_prodi', 'ASC')->get();
        $id = $prodi;
        return view('mahasiswa.create', compact('prodi'));
        return view('mahasiswa.create', ['id' => $id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'npm' => 'required|unique:mahasiswas,npm|min:10',
        'nama' => 'required',
        'tanggal_lahir' => 'required',
        'kota_lahir' => 'required',
        'foto' => 'required|file|image|max:5000',
        'prodi_id' => 'required'
        ]);

        $temp = $request->foto->getClientOriginalExtension();
        $nama_foto = $validateData['npm'] . '.' . $temp;
        $path = $request->foto->storeAs('public/images', $nama_foto);
       
        $mahasiswa = new Mahasiswa();
        $mahasiswa->id = Str::uuid();
        $mahasiswa->npm = $validateData['npm'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->foto = $nama_foto;
        $mahasiswa->tanggal_lahir = $validateData['tanggal_lahir'];
        $mahasiswa->kota_lahir = $validateData['kota_lahir'];
        $mahasiswa->prodi_id = $validateData['prodi_id'];
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success',"Data ".$validateData['nama']. " berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::orderBy('nama_prodi','ASC')->get();
        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa)->with('prodi', $prodi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'kota_lahir' => 'required',
            'foto' => 'required|file|image|max:5000',
            'prodi_id' => 'required'
            ]);
    
            $temp = $request->foto->getClientOriginalExtension();
            $nama_foto = $mahasiswa->npm . '.' . $temp;
            $path = $request->foto->storeAs('public/images', $nama_foto);
           
            $mahasiswa->npm = $mahasiswa->npm;
            $mahasiswa->nama = $validateData['nama'];
            $mahasiswa->foto = $nama_foto;
            $mahasiswa->tanggal_lahir = $validateData['tanggal_lahir'];
            $mahasiswa->kota_lahir = $validateData['kota_lahir'];
            $mahasiswa->prodi_id = $validateData['prodi_id'];
            $mahasiswa->save();
    
            return redirect()->route('mahasiswa.index')->with('success',"Data ".$validateData['nama']. " berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');


    }

    public function multiDelete(Request $request)
    {
        Mahasiswa::whereIn('id', $request->get('selected'))->delete();

    return response("Selected mahasiswa(s) deleted successfully.", 200);
    }
}
