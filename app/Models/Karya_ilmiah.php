<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Karya_ilmiah extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'bahasa', 'jenis_dokumen_id', 'mahasiswa_id', 'dosen_pa', 'dosen_pembibing', 'dosen_penguji', 'dosen_penguji_eksternal', 'is_approved', 'json_dokumen'];
    protected $table = "karya_ilmiah";

    function mahasiswa() : BelongsTo {
        return $this->belongsTo(Mahasiswa::class);
    }

    function pa() : BelongsTo {
        return $this->belongsTo(User::class, "dosen_pa");
    }

    function pembimbing() : BelongsTo {
        return $this->belongsTo(User::class, "dosen_pembimbing");
    }

    function penguji() : BelongsTo {
        return $this->belongsTo(User::class, "dosen_penguji");
    }

    function jenis_dokumen() : BelongsTo {
        return $this->belongsTo(Jenis_dokumen::class);
    }
}
