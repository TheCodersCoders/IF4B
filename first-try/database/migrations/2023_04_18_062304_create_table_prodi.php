<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prodi', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama_prodi');
            $table->uuid('fakultas_id');
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prodi');
    }
}
