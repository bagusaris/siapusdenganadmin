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
        Schema::create('puskesmas', function (Blueprint $table) {
            $table->id ('id_puskesmas') -> primaryKey();
            $table->string ('nama_puskesmas');
            $table->string ('email_puskesmas');
            $table->string ('telp_puskesmas');
            $table->string ('alamat_puskesmas');
            $table->string ('foto_puskesmas');
            $table->string ('jam_kerja');           
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
        Schema::dropIfExists('puskesmas');
    }
};
