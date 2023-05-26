<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_dokumen extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kode'];
    protected $table = "jenis_dokumen";
}
