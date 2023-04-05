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
        Schema::create('galang_danas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_galangdana');
            $table->string('lokasi');
            $table->boolean('kategori');
            $table->date('durasi_donasi');

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
        Schema::dropIfExists('galang_danas');
    }
};
