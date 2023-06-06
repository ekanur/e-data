<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("mahasiswa", function(Blueprint $table){
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
            $table->foreign('prodi_id')->references('id')->on("prodi");
        });

        Schema::table("karya_ilmiah", function(Blueprint $table){
            $table->foreign('jenis_dokumen_id')->references('id')->on('jenis_dokumen');
            $table->foreign('mahasiswa_id')->references('id')->on("mahasiswa");
            $table->foreign('dosen_pa')->references('id')->on("users");
            $table->foreign('dosen_pembimbing')->references('id')->on("users");
            $table->foreign('dosen_penguji')->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
