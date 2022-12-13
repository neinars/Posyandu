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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_laporan');
            $table->string('keterangan');
            $table->boolean('is_approve')->default(false);
            $table->integer('approve_by');
            $table->string('approve_date');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('penimbangan_id')->constrained();
            $table->foreignId('pemeriksaan_id')->constrained();
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
        Schema::dropIfExists('laporans');
    }
};
