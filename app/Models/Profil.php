<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profils';

    // Mengatur primary key menjadi 'id_anggota'
    protected $primaryKey = 'id_profil';

    protected $guarded = [
        'id_profil'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
