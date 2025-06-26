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
        Schema::create('item_requisiciones', function (Blueprint $table) {
            $table->id('idItemRequisicion');
            $table->integer('cantidad');
            $table->integer('cantidadAprobada');
            $table->foreignId('idRequisicion')
                ->constrained('requisiciones', 'idRequisicion')
                ->onDelete('restrict');
            $table->foreignId('codigo')
                ->constrained('materiales', 'codigo')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_requisiciones');
    }
};
