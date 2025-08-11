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
    ];

    /**
     * The attributes that should be cast.
     *
     * Casting memastikan bahwa atribut tertentu dikonversi ke tipe data
     * yang benar saat diakses, membuatnya lebih mudah untuk bekerja
     * dengan nilai boolean, tanggal, atau JSON.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sertifikat_halal' => 'boolean',
    ];
}
