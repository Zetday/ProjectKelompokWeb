<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPeminjaman extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'detail_peminjaman';

    // Primary key tabel ini (jika bukan 'id')
    protected $primaryKey = 'id_detail_peminjaman';

    // Kolom yang dapat diisi secara massal
    protected $guarded = [
        'id_detail',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Relasi dengan model Peminjaman
     */
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }

    /**
     * Relasi dengan model Buku
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
