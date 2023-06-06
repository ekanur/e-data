<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin e-Data',
            'username' => 'admin',
            'email' => 'admin@edata.com',
            'password' => Hash::make('12345'),
            'nip' => '1122334455',
            'pns' => 1,
            'is_admin' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Prof. Dr. Budi Eko Soetjipto, M.Ed., M.Si.',
            'username' => 'budieko',
            'email' => 'budi.eko.fe@um. ac.id',
            'password' => Hash::make('12345'),
            'nip' => '196410241988121002',
            'pns' => 1,
            'is_admin' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Dediek Tri Kurniawan, S.E., M.M.',
            'username' => 'didiek',
            'email' => 'dediek.kurniawan.fe@um.ac.id',
            'password' => Hash::make('12345'),
            'nip' => '199006292019031012',
            'pns' => 1,
            'is_admin' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Buyung Adi Dharma, S.AP., M.AP.',
            'username' => 'buyung',
            'email' => 'buyung.adi.fe@um.ac.id',
            'password' => Hash::make('12345'),
            'nip' => '6200201719326',
            'pns' => 0,
            'is_admin' => 0
        ]);
    }
}
