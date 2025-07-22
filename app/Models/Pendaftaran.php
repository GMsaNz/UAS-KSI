<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Seminar;

class Pendaftaran extends Model
{
    protected $fillable = ['user_id', 'seminar_id', 'waktu_daftar'];

    // ⬇️ Tambahkan relasi user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ⬇️ Tambahkan relasi seminar
    public function seminar()
    {
        return $this->belongsTo(Seminar::class);
    }
}
