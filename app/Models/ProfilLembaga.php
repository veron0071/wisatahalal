<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilLembaga extends Model
{
    use HasFactory;
    protected $table = 'profil_lembagas';
    protected $fillable = ['pendahuluan', 'tujuan_manfaat', 'target', 'legal_formal'];
}
