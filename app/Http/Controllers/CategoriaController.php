<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
        public function addCategoria(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required|string',

        ]);

        $categoria = new \App\Models\Categoria();
        $categoria->nombre = $request->input('nombre');


        if ($categoria->save()) {
            return response()->json(['message' => 'Category added successfully'], 200);
        }

        return response()->json(['message' => 'Failed to add category'], 500);
    }
}
