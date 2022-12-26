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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('bidan_id')->constrained();
            $table->string('tgl_pemeriksaan');
            $table->string('keluhan');
            $table->string('berat_badan');
            $table->string('tekanan_darah');
            $table->string('tinggi_badan');
            $table->string('usia_kehamilan');
            $table->string('tinggi_fundus');
            $table->string('letak_janin');
            $table->string('denyut_janin');
            $table->string('keterangan');
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
        Schema::dropIfExists('pemeriksaans');
    }
};
