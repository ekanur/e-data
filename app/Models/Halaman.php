<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'url', 'isi', 'is_published'];
    protected $table = "halaman";
}
