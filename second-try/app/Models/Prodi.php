<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "Prodi";
    use HasFactory, HasUuids;
    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
