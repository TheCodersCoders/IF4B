<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    use HasFactory, HasUuids;
    protected $table='airs';

    protected $fillable = [ 'jenis_air', 'foto'];
    
    

}
