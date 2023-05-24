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
    }
}
