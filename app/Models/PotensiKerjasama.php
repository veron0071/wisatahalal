<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotensiKerjasama extends Model
{
    use HasFactory;

    protected $table = 'potensi_kerjasamas';

    protected $fillable = [
        'kategori_mitra',
        'mitra_potensial',
        'isu_need_utama',
        'nilai_tambah_pd_mes',
    ];
}
