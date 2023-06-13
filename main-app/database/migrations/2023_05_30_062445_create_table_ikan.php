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
        Schema::create('ikans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->char('nama_ikan', 50);
            $table->string('foto');
            $table->string('deskripsi');
            $table->uuid('air_id');
            $table->foreign('air_id')->references('id')->on('airs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikans');
    }
};
