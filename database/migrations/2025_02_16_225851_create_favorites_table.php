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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Asegura compatibilidad
            $table->string('name');
            $table->string('image');
            $table->string('drink_id')->nullable();
            $table->timestamps();

            // Clave foránea con referencia explícita
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Eliminar clave foránea antes de borrar la tabla
        });

        Schema::dropIfExists('favorites');
    }
};
