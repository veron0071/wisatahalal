<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;
    protected $table = 'program_kerjas';
    protected $fillable = ['komite_bidang', 'program_kerja', 'tujuan_program'];
}
