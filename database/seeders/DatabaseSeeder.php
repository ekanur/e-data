<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            JurusanSeeder::class,
            ProdiSeeder::class,
            MahasiswaSeeder::class,
            JenisDokumenSeeder::class,
            KaryaIlmiahSeeder::class,
        ]);
    }
}
