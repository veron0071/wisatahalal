<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceramah extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pemateri',
        'deskripsi',
        'video_url',
    ];
}
