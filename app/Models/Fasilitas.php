<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    use HasFactory;

    /**
     * Nama tabel database yang terkait dengan model ini.
     *
     * @var string
     */
    protected $table = 'fasilitas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_fasilitas',
        'lokasi',
        'deskripsi',
        'foto',
    ];
}
