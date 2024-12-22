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
            'foto' => '01JFP4CS0FRRC31P6XHWKP0Z6M.png',
        ]);

        Profil::create([
            'NIM' => 'C050423017',
            'nama_mahasiswa' => 'Muhammad Rendy',
            'kelas' => 'SIKC-3B',
            'deskripsi' => 'Membuat menu Kategori Buku, Membuat menu Peminjaman, Membuat menu Profil, Membuat frontend Profil, Membuat PPT, Membuat laporan',
            'foto' => '01JFMPMYD58AGXD7220DJ7STME.png',
        ]);
    }
}
