<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khazanah extends Model
{
    use HasFactory;
    protected $table = 'khazanahs';
    protected $fillable = ['nama', 'foto'];
}
