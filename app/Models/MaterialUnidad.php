<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialUnidad extends Model
{
    protected $table = 'material_unidades';
    protected $primaryKey = 'idMaterialUnidad';

    protected $fillable = [
        'cantidad',
        'codigo',
        'idUnidad',
        'codigoPresupuesto'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class, 'codigo', 'codigo');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad', 'idUnidad');
    }

    public function presupuesto()
    {
        return $this->belongsTo(Presupuesto::class, 'codigoPresupuesto', 'codigoPresupuesto');
    }
}
