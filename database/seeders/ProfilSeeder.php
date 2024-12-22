<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'NIM' => 'C050423008',
            'nama_mahasiswa' => 'Muhammad Wahyu Nurhadi',
            'kelas' => 'SIKC-3B',
            'deskripsi' => 'Membuat menu Buku, Membuat menu Anggota, Membuat frontend beranda, Membuat PPT, Membuat laporan',
            'foto' => 'C050423008.png',
        ]);

        Profil::create([
            'NIM' => 'C050423017',
            'nama_mahasiswa' => 'Muhammad Rendy',
            'kelas' => 'SIKC-3B',
            'deskripsi' => 'Membuat menu Kategori Buku, Membuat menu Peminjaman, Membuat menu Profil, Membuat frontend Profil, Membuat PPT, Membuat laporan',
            'foto' => 'C050423017.png',
        ]);
    }
}
