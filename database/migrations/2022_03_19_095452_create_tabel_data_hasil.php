<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataHasil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_hasil', function (Blueprint $table) {
            $table->id('id_hasil');
            $table->string('nama');
            $table->text('alamat');
            $table->string('jenis_musang');
            $table->longText('hasil_diagnosa');
            $table->longText('solusi');
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
        Schema::dropIfExists('tabel_data_hasil');
    }
}
