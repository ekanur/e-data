<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya_ilmiah extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'bahasa', 'jenis_dokumen_id', 'mahasiswa_id', 'dosen_pa', 'dosen_pembibing', 'dosen_penguji', 'dosen_penguji_eksternal', 'is_approved', 'json_dokumen'];
    protected $table = "karya_ilmiah";
}
