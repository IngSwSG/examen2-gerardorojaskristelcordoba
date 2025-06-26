<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    protected $table = 'credenciales';
    protected $primaryKey = 'nombreUsuario';

    protected $fillable = ['nombreUsuario', 'contrasenia'];

}
