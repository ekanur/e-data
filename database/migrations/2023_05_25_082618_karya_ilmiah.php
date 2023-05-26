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
        Schema::create('karya_ilmiah', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('bahasa');
            $table->integer('jenis_dokumen_id');
            $table->integer("mahasiswa_id");
            $table->integer("dosen_pa");
            $table->integer('dosen_pembimbing');
            $table->integer('dosen_penguji');
            $table->integer('dosen_penguji_eksternal')->nullable();
            $table->boolean("is_approved");
            $table->json("json_dokumen");
            $table->timestamps();
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
