<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataPenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_penyakit', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->string('kode_penyakit')->unique();
            $table->string('nama_penyakit');
            $table->longText('solusi');
            $table->timestamps();
        });

        $insertedData = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Parvovirus',
                'solusi' => json_encode([
                    '- Memberikan cairan infus;',
                    '- Memberikan obat anti mual seperti Metaclopramide, Dolasetron, Andasetron, dan Prochlorperazine;',
                    '- Memberikan antibiotik seperti Cofoxitin, Timentin, Enrofloxacin dan Metronidazole;',
                    '- Memberikan vitamin.'
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Distemper',
                'solusi' => json_encode([
                    '- Memberikan cairan infus;',
                    '- Memberikan anti nyeri;',
                    '- Memberikan antibiotik;',
                    '- Memberikan obat anti muntah, diare, dan gejala neurologis.'
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Hepatitis',
                'solusi' => json_encode([
                    '- Memberikan mineral yang mengandung seng;',
                    '- Memberikan anti kejang antibiotik, antiradang dan diuretika;',
                    '- Memberikan makanan basah dengan tinggi energi dan protein;',
                    '- Memberikan vitamin.',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('tabel_data_penyakit')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_penyakit');
    }
}
