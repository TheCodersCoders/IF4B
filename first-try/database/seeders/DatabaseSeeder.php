<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        foreach(range(1,99) as $number){
            
            Mahasiswa::create([
                'npm' => '2125250067'.$number,
                'nama' => fake()->name(),
                'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => '2125250067.jpeg',
                'prodi_id' => '7f761cf0-d972-4a62-90aa-d24471a24328'

            ]);
        }
        // \App\Models\User::factory(10)->create();
        $this->call([
            FakultasSeeder::class
        ]);
    }
}
