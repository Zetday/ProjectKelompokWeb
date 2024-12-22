<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::create([
            'id_anggota' => 1,
            'id_buku' => 1,
            'tanggal_pinjam' => '2024-12-18',
            'tanggal_kembali' => '2024-12-25',
            'status' => 'Dipinjam',
        ]);
    }
}
