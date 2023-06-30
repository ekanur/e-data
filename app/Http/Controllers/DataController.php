<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Prodi;

class DataController extends Controller
{
  public function index(){

    return view('front.data-mahasiswa',
    [
        'jurusan' => Jurusan::all(),
        'prodi' => Prodi::all()
    ]);
}
}
