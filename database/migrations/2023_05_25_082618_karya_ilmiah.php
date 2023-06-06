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
            $table->unsignedBigInteger('jenis_dokumen_id');
            $table->unsignedBigInteger("mahasiswa_id");
            $table->unsignedBigInteger("dosen_pa");
            $table->unsignedBigInteger('dosen_pembimbing');
            $table->unsignedBigInteger('dosen_penguji');
            $table->string('dosen_penguji_eksternal')->nullable();
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
