<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory; 
    public $incrementing = false;
    protected $keyType = 'string';
    public function setUUID(){$this->attributes['id']=Str::uuid();}
    public function prodi(){
        return $this->hasMany(Prodi::class);
    }

}
