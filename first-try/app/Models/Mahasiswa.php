<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Mahasiswa extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public function setUUID(){$this->attributes['id']=Str::uuid();}
    protected $fillable = ['npm', 'nama', 'tanggal_lahir', 'kota_lahir', 'foto', 'prodi_id'];

        public function getTanggalLahirAttribute($value){
            return Carbon::createFromFormat('Y-m-d', $value)->format('l d M Y');
        }

        public function prodi(){
            return $this->belongsTo(Prodi::class,'prodi_id');
        }
}
