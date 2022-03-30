<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'tabel_data_hasil';
    protected $primaryKey = 'id_hasil';
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_musang',
        'hasil_diagnosa',
        'solusi'
    ];
}
