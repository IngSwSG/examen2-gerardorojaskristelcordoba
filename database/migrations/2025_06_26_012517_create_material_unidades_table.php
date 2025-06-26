<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('material_unidades', function (Blueprint $table) {
            $table->id('idMaterialUnidad');
            $table->integer('cantidad');
            $table->foreignId('codigo')
                ->constrained('materiales', 'codigo')
                ->onDelete('restrict');
            $table->foreignId('idUnidad')
                ->constrained('unidades', 'idUnidad')
                ->onDelete('restrict');
            $table->foreignId('codigoPresupuesto')
                ->constrained('presupuestos', 'codigoPresupuesto')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_unidades');
    }
};
