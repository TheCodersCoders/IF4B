<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public $table = "Prodi";
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public function setUUID(){$this->attributes['id']=Str::uuid();}
    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
