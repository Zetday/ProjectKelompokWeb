<?php

namespace Database\Seeders;

use App\Models\KategoriBuku;
use Illuminate\Database\Seeder;

class KategoriBukuSeeder extends Seeder
{
    public function run(): void
    {
        KategoriBuku::create([
            'nama_kategori' => 'Sastra',
        ]);

        KategoriBuku::create([
            'nama_kategori' => 'Fiksi',
        ]);
    }
}