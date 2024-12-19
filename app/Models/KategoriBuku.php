<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    // Mengatur primary key menjadi 'id_kategori'
    protected $primaryKey = 'id_kategori';

    protected $guarded = [
        'id_kategori'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'id_kategori');
    }
}
