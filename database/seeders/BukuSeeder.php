<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'id_kategori' => 1,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => 2005,
            'jumlah_stok' => 10,
        ]);

        Buku::create([
            'id_kategori' => 2,
            'judul' => 'Harry Potter The Sorcered Stone',
            'penulis' => 'J.K. Rowling',
            'penerbit' => 'Bloomsburry',
            'tahun_terbit' => 2015,
            'jumlah_stok' => 5,
        ]);
    }
}
