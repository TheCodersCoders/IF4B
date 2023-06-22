<?php

namespace App\Http\Controllers;

use App\Models\Air;
use App\Models\Ikan;
use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data['ikans'] = Ikan::all();
        $data['airs'] = Air::all();
        $data['makanans'] = Makanan::all();
        $data['airikan'] = DB::select('SELECT a.jenis_air, COUNT(*) as jumlah from ikans i 
        JOIN airs a ON i.air_id = a.id
        GROUP BY a.jenis_air');
        return view('dashboard', $data);
    }
}
