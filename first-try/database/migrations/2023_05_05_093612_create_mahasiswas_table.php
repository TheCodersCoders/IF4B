<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('npm',10)->unique();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->char('kota_lahir', 50);
            $table->string('foto');
            $table->uuid('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('prodi')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('mahasiswas');
    }
}
