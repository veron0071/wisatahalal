<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\DokumentasiKegiatanKawasan;

class KawasanWisataHalal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dokumentasi(): HasMany
    {
        return $this->hasMany(DokumentasiKegiatanKawasan::class);
    }
}
