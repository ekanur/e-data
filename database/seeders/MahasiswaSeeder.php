<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '110533430596',
            'nama' => 'Ananda Erlangga',
            'hp' => '08882323',
            'email' => 'ananda@feb.um.ac.id',
            'alamat' => 'Malang',
            'tahun_masuk' => 2011,
            'tahun_lulus' => 2015,
            'jurusan_id' => 1,
            'prodi_id' => 1,
        ]);
    }
}
