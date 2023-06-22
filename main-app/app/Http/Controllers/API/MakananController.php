<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MakananController extends BaseController
{
    public function index(){
        $makanans = Makanan::all();
        $success['data'] = $makanans;
        return $this->sendSuccess($success,'Data ikan');
       }

       public function store(Request $request){
        $validateData = $request ->validate([
            'jenis_makanan' => 'required|unique:makanans',
        ]);
    
      
    
        $makanan = new Makanan();
        $makanan->id = Str::uuid();
        $makanan->jenis_makanan = $validateData['jenis_makanan'];
        if($makanan->save()){
            $success['data']= $makanan;
            return $this->sendSuccess($success, 'Data makanan berhasil disimpan');
           }
           else{
            return $this->sendError('Error', ['error' => 'Data makanan gagal disimpan']);
           }
       }

       public function update(Request $request, $id)
       {
           $validateData = $request ->validate([
               'jenis_makanan' => 'required|unique:makanans',
           ]);
           $makanan = Makanan::find($id);
           $makanan->id = Str::uuid();
           $makanan->jenis_makanan = $validateData['jenis_makanan'];
           if($makanan->save()){
            $success['data']= $makanan;
            return $this->sendSuccess($success, 'Data makanan berhasil diubah');
           }
           else{
            return $this->sendError('Error', ['error' => 'Data makanan gagal diubah']);
           }
       }

       public function delete($id){
        $makanan = Makanan::findorFail($id);
        if($makanan->save()){
            $success['data']= $makanan;
            return $this->sendSuccess($success, 'Data makanan berhasil dihapus');
           }
           else{
            return $this->sendError('Error', ['error' => 'Data makanan gagal dihapus']);
           }
       }
       
}
