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
        Schema::create('project_technology', function (Blueprint $table) {
            // collego il campo project_id (con vincolo)
            // il metodo cascadeOnDelete() elimina la riga di questa tabella ponte in caso la riga a cui fa riferimento tramite la sua chiave esterna
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();

            // collego il campo technology_id (con vincolo)
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();


            // dobbiamo indicare le chiavi primarie (devono essere entrambe)
            $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
