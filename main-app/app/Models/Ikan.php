<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = [ 'nama_ikan', 'deskripsi', 'foto', 'air_id'];

    public function air(){
        return $this->belongsTo(Air::class,'air_id');
    }

}
