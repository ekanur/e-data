<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'hp', 'email', 'alamat', 'tahun_masuk', 'tahun_lulus', 'jurusan_id', 'prodi_id', 'foto'];
    protected $table = "mahasiswa";

    function jurusan() : BelongsTo {
        return $this->belongsTo(Jurusan::class);
    }

    function prodi() : BelongsTo {
        return $this->belongsTo(Prodi::class);
    }


}
