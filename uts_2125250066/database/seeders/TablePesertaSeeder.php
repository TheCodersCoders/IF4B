<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablePesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_pesertas')->insert([
            [
                'nama' => 'Rizky Ridho Ramadhan',
                'email' => 'ramadhan@test.com',
                'asal_pt' => 'Universitas Multi Data Palembang',
                'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/2125250079.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Muhammad Totti Alfarabi',
                'email' => 'alfarabi@test.com',
                'asal_pt' => 'Universitas Multi Data Palembang',
                'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/2125250080.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Nama Mahasiswa',
                'email' => 'Email Mahasiswa',
                'asal_pt' => 'Universitas Multi Data Palembang',
                'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/npm.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
