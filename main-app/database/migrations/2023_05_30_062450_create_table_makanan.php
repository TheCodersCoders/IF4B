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
        Schema::create('makanans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->char('jenis_makanan', 20);
            $table->string('foto');
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
        Schema::dropIfExists('makanans');
    }
};
