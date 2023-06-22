<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Air;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AirController extends BaseController
{
    public function index(){
        $airs = Air::all();
        $success['data'] = $airs;
        return $this->sendSuccess($success,'Data Air');
       }

       public function store(Request $request )
       {
   
           $validateData = $request ->validate([
               'jenis_air' => 'required|unique:airs',
           ]);
   
           
   
           $air = new Air();
           $air->id = Str::uuid();
           $air->jenis_air = $validateData['jenis_air'];

           if($air->save()){
            $success['data']= $air;
            return $this->sendSuccess($success, 'Data Ikan berhasil disimpan');
           }
           else{
            return $this->sendError('Error', ['error' => 'Data Ikan gagal disimpan']);
           }
   
       }

       public function update(Request $request, $id)
       {
           $validateData = $request ->validate([
               'jenis_air' => 'required|unique:airs',
           ]);
   
           
           $air = Air::find($id);
           $air->id = Str::uuid();
           $air->jenis_air = $validateData['jenis_air'];
           
           if($air->save()){
            $success['data']= $air;
            return $this->sendSuccess($success, 'Data Ikan berhasil disimpan');
           }
           else{
            return $this->sendError('Error', ['error' => 'Data Ikan gagal disimpan']);
           }
   
       }

       public function delete($id){
        $air = Air::findorFail($id);
        if($air->save()){
            $success['data']= $air;
            return $this->sendSuccess($success, "Data Ikan $id berhasil dihapus");
           }
           else{
            return $this->sendError('Error', ['error' => 'Data Ikan gagal di perbarui']);
           }
       }
}
