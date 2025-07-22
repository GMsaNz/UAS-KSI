<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seminar extends Model
{
    use HasFactory;

    // Tambahkan ini:
    protected $fillable = [
        'judul', 'deskripsi', 'tanggal', 'kuota' // tambahkan field lain juga kalau perlu
    ];
}
