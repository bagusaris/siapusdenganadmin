<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antreans', function (Blueprint $table) {
            $table->id();
            $table->string ('nomor_antrean');
            $table->string ('status');
            $table->unsignedBigInteger('id_puskesmas');
            $table->foreign('id_puskesmas')->references('id_puskesmas')->on('puskesmas');
            $table->unsignedBigInteger('id_poli');
            $table->foreign('id_poli')->references('id_poli')->on('polis');
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id_pasien')->on('pasiens');
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
        Schema::dropIfExists('antreans');
    }
};
