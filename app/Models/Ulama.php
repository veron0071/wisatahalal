<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulama extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * Properti ini melindungi dari kerentanan Mass Assignment
     * dengan secara eksplisit mendefinisikan kolom mana yang boleh diisi
     * saat menggunakan metode create() atau update().
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'sejarah',
        'foto',
    ];
}
