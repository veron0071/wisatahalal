<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GisPesantren extends Model
{
    use HasFactory;
    protected $table = 'gis_pesantrens';
    protected $fillable = ['keterangan', 'foto'];
}
