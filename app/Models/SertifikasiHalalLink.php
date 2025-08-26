<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikasiHalalLink extends Model
{
    use HasFactory;
    protected $table = 'sertifikasi_halal_links';
    protected $fillable = [
        'alur_sertifikasi_url', 'persyaratan_url', 'ptps_sihalal_url',
        'pencarian_produk_url', 'modul_self_declare_url', 'modul_reguler_url'
    ];
}
