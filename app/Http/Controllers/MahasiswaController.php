<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\Mahasiswa;

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
    $validasi = $request->validate([
      'nim' => 'required',
      'nama' => 'required',
      // 'foto' => 'required|file|size:2048'

    ]);

    $data = new Mahasiswa();
    $data->nim = $validasi['nim'];
    $data->nama = $validasi['nama'];
    $data->hp = $request->input('hp');
    $data->email = $request->input('email');
    $data->alamat = $request->input('alamat');
    $data->tahun_masuk = $request->input('tahun_masuk');
    $data->tahun_lulus = $request->input('tahun_lulus');
    $data->jurusan_id = $request->input('jurusan_id');
    $data->prodi_id = $request->input('prodi_id');

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $file->move('fotomahasiswa/', $fileName);
        $data->foto = $fileName;
    }

    $data->save();

    return redirect()->route('data-akademik');
  }


}
