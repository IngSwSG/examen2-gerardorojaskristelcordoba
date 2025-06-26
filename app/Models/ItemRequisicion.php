<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemRequisicion extends Model
{
    protected $table = 'item_requisicions';
    protected $primaryKey = 'idItemRequisicion';

    protected $fillable = [
        'cantidad',
        'cantidadAprobada',
        'idRequisicion'
    ];

    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class, 'idRequisicion', 'idRequisicion');
    }
}
