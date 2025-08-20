<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_umkm',
        'nomor_sertifikat',
        'tanggal_terbit',
        'tanggal_kedaluwarsa',
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
        'tanggal_kedaluwarsa' => 'date',
    ];
}
