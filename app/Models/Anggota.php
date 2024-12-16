<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    // Mengatur primary key menjadi 'id_anggota'
    protected $primaryKey = 'id_anggota';

    protected $guarded = [
        'id'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota');
    }
}
