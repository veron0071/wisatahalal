<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelIlmiah extends Model
{
    use HasFactory;
    protected $table = 'artikel_ilmiahs';
    protected $fillable = ['nama', 'file_artikel'];
}
