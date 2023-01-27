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
        Schema::create('polis', function (Blueprint $table) {
            $table->id ('id_poli') -> primaryKey();
            $table->string('kode_poli');
            $table->unsignedBigInteger ('id_puskesmas');
            $table->foreign('id_puskesmas')->references('id_puskesmas')->on('puskesmas');
            $table->string ('nama_poli');
            $table->text ('deskripsi_poli');
            $table->string ('logo_poli');      
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
        Schema::dropIfExists('polis');
    }
};
