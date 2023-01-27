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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id ('id_pasien') -> primaryKey();
            $table->string ('nik');
            $table->string ('nama_pasien');
            $table->string ('provinsi');
            $table->string ('kabupaten');
            $table->string ('kecamatan');
            $table->string ('kelurahan');
            $table->string ('alamat');
            $table->unsignedBigInteger ('id_puskesmas');
            $table->foreign('id_puskesmas')->references('id_puskesmas')->on('puskesmas');
            $table->unsignedBigInteger('id_poli');   
            $table->foreign('id_poli')->references('id_poli')->on('polis');
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
        Schema::dropIfExists('pasiens');
    }
};
