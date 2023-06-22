<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class IkanController extends BaseController
{
   public function index(){
    $ikans = Ikan::all();
    $success['data'] = $ikans;
    return $this->sendSuccess($success,'Data ikan');
   }

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

       if($ikan->save()){
        $success['data']= $ikan;
        return $this->sendSuccess($success, 'Data Ikan berhasil disimpan');
       }
       else{
        return $this->sendError('Error', ['error' => 'Data Ikan gagal disimpan']);
       }

   }

   public function update(Request $request, $id)
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

       $ikan = Ikan::find($id);
       $ikan->id=Str::uuid();
       $ikan->nama_ikan = $validateData['nama_ikan'];
       $ikan->deskripsi = $validateData['deskripsi'];
       $ikan->air_id = $validateData['air_id'];
       $ikan->foto = $nama_foto;

       if($ikan->save()){
        $success['data']= $ikan;
        return $this->sendSuccess($success, 'Data Ikan berhasil diperbarui');
       }
       else{
        return $this->sendError('Error', ['error' => 'Data Ikan gagal di perbarui']);
       }

   }

   public function delete($id){
    $ikan = Ikan::findorFail($id);
    if($ikan->save()){
        $success['data']= $ikan;
        return $this->sendSuccess($success, "Data Ikan $id berhasil dihapus");
       }
       else{
        return $this->sendError('Error', ['error' => 'Data Ikan gagal di perbarui']);
       }
   }
}
