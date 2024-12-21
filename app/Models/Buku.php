<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'buku';

    protected $primaryKey = 'id_buku';

    // Kolom yang dapat diisi secara massal
    protected $guarded = [
        'id_buku'
    ];

    // Jika Anda menggunakan timestamp untuk kolom yang berbeda
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Relasi dengan model Peminjaman
     */
    public function peminjamans()
    {
        return $this->hasMany('id_buku');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'id_kategori');
    }
}
