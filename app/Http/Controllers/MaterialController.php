<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function addMaterial(Request $request)
    {
        
        $request->validate([
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:categorias,idCategoria',
        ]);

        $material = new \App\Models\Material();
        $material->descripcion = $request->input('descripcion');
        $material->unidadMedida = $request->input('unidadMedida');
        $material->ubicacion = $request->input('ubicacion');
        $material->idCategoria = $request->input('idCategoria');

        if ($material->save()) {
            return response()->json(['message' => 'Material added successfully'], 200);
        }

        return response()->json(['message' => 'Failed to add material'], 500);
    }
}
