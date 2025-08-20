<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_usaha',
        'nama_pemilik',
        'deskripsi_produk',
        'lokasi',
        'sertifikat_halal',
        'foto',
        'file_sertifikat', // Kolom baru
    ];

    protected $casts = [
        'sertifikat_halal' => 'boolean',
    ];
}
