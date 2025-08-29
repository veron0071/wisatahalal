<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; // <-- Jangan lupa import

class Opini extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    /**
     * Membuat atribut virtual 'foto_url' yang berisi URL lengkap ke gambar.
     */
    protected function fotoUrl(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => $this->foto ? Storage::url($this->foto) : null,
        );
    }

    /**
     * Membuat atribut virtual 'file_url' yang berisi URL lengkap ke file.
     */
    protected function fileUrl(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => $this->file ? Storage::url($this->file) : null,
        );
    }
}
