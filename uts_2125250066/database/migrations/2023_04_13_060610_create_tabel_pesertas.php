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
        Schema::create('tabel_pesertas', function (Blueprint $table) {
            $table->bigInteger('id',20);
            $table->char('nama', 50);
            $table->char('email', 50);
            $table->char('asal_pt',50);
            $table->char('url_foto', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pesertas');
    }
};
