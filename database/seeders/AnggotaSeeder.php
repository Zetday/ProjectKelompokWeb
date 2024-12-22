<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Wahyu',
            'email' => 'wahyu@gmail.com',
            'no_telepon' => 8345676543,
            'alamat' => 'JL A Yani KM 14',
            'tanggal_daftar' => '2024-12-01',
        ]);

        Anggota::create([
            'nama' => 'Asep Nurmagomedov',
            'email' => 'asep@gmail.com',
            'no_telepon' => 8934235135,
            'alamat' => 'Jalan Pramuka No. 12 RT. 33 RW. 02',
            'tanggal_daftar' => '2024-12-22',
        ]);
    }
}
