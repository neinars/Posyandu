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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained();
            $table->string('nama_balita');
            $table->string('tl_balita');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('panjang_badan');
            $table->string('berat_lahir');
            $table->string('lingkar_kepala');
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
        Schema::dropIfExists('balitas');
    }
};
