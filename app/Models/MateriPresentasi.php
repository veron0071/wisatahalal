<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MateriPresentasi extends Model
{
    use HasFactory;
    protected $table = 'materi_presentasis';
    protected $fillable = ['nama', 'file_presentasi'];
}
