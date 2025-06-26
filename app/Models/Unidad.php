<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades';
    protected $primaryKey = 'idUnidad';
    protected $fillable = ['nombre', 'idUnidad'];
}
