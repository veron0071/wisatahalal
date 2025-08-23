<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    use HasFactory;
    protected $table = 'roadmaps';
    protected $fillable = ['gambar_roadmap', 'tahap1_tahun', 'tahap1_deskripsi', 'tahap2_tahun', 'tahap2_deskripsi', 'tahap3_tahun', 'tahap3_deskripsi'];
}
