<?php

use App\Models\Categoria;
use App\Models\Material;
use function Pest\Laravel\postJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('dadoUnMaterialQueNoExiste_insertarMaterial_funcionaCorrectamente', function () {
    $categoria = Categoria::factory()->create();

    $datosCategoria = [
        'unidadMedida' => 'kg',
        'descripcion' => 'Material de prueba',
        'ubicacion' => 'Bodega 1',
        'idCategoria' => $categoria->idCategoria,
    ];

    $response = postJson('/api/addMaterial', $datosCategoria);

    $response->assertStatus(200);

    expect(Material::where('descripcion', 'Material de prueba')->exists())->toBeTrue();
});