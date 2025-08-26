<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustriKeuanganSyariah extends Model
{
    use HasFactory;
    protected $table = 'industri_keuangan_syariahs';
    protected $fillable = ['judul', 'foto'];
}
