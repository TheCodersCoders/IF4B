<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach(range(1,99) as $number){
            
            Mahasiswa::create([
                'npm' => '21252'.$number,
                'nama' => fake()->name(),
                'tanggal_lahir' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => '2125250088.jpg',
                'prodi_id' => 'c851bf15-e118-4e96-982b-5d024c48a8fb',


            ]);
        }
        // \App\Models\User::factory(10)->create();
        $this->call([
            FakultasSeeder::class
        ]);
    }
}
