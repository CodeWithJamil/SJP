<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sjp', function (Blueprint $table) {
            $table->integer('noSTT');
            $table->unique('noSTT');
            $table->string('Pengirim');
            $table->string('Penerima');
            $table->string('Alamat');
            $table->string('Barang');
            $table->integer('Koli');
            $table->integer('Kgm');
            $table->integer('Volume');
            $table->integer('Jumlah');
            $table->string('Ket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('sjp');
    }
};
