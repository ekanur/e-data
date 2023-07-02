<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Prodi;

class MahasiswaController extends Controller
{
  // public function index(){

  //   return view('front.data-mahasiswa',
  //   [
  //       'jurusan' => Jurusan::all(),
  //       'prodi' => Prodi::all()
  //   ]);
  // }

  public function cerate(){
    return view('front.data-mahasiswa',
    [
        'jurusan' => Jurusan::all(),
        'prodi' => Prodi::all()
    ]);

  }

  public function store(Request $request)
  {
    Mahasiswa::cerate($request->all());
  }


}
