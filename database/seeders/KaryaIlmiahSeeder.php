<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryaIlmiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karya_ilmiah')->insert([
            'judul' => 'Contoh Judul Karya Ilmiah',
            'bahasa' => 'Indonesia',
            'jenis_dokumen_id' => 1,
            'mahasiswa_id' => 1,
            'dosen_pa' => 2,
            'dosen_pembimbing' => 3,
            'dosen_penguji' => 1,
            'is_approved' => true,
            'json_dokumen' => json_encode(array("cover"=>null, "judul"=>null, "abstrak"=>null)),
        ]);
    }
}
