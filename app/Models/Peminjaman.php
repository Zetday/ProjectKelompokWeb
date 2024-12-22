<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $primaryKey = 'id_peminjaman';

    protected $guarded = [
        'id_peminjaman',
    ];

    /**
     * Relasi dengan model Anggota
     */
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    /**
     * Relasi dengan model Buku
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}