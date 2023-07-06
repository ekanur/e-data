<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya_ilmiah;
use App\Models\Mahasiswa;
use App\Models\Jenis_dokumen;
use App\Models\Prodi;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;

class DokumenController extends Controller
{
    function index() : View {
        $title = 'Hapus Dokumen!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        // dd(Karya_ilmiah::all());

        return view("admin.dokumen")->with('karya_ilmiah', Karya_ilmiah::with(['mahasiswa'=> ['jurusan', 'prodi'], 'pa',  'penguji', 'pembimbing', 'jenis_dokumen'])->get());
    }

    function add() : View {

        return view("admin.dokumen-add")
        ->with('jenis_dokumen', Jenis_dokumen::select("id", "nama")->get())
        ->with('jurusan', Jurusan::select("id", "nama")->get())
        ->with('prodi', Prodi::select("id", "nama")->get())
        ->with('dosen', User::select("id", "name")->whereIsAdmin(0)->get());
    }
    
    function edit($id) : View{
        return view("admin.dokumen-edit")->with('edit', Karya_ilmiah::find($id));
    }

    function update(Request $request): RedirectResponse{
        $karya_ilmiah = Karya_ilmiah::findOrFail($request->id);
        $karya_ilmiah->nama = $request->nama;
        $karya_ilmiah->kode = $request->kode;
        $karya_ilmiah->save();
        return back()->with("success", "Berhasil meng-update Karya Ilmiah.");;
    }

    function create(Request $request): RedirectResponse{
        // dd($request->file("dokumen"));

        $mahasiswa = Mahasiswa::firstOrNew(['nim' => $request->nim],
            [
                "nim" => $request->nim, 
                "nama" => $request->nama, 
                "jurusan_id" => $request->jurusan_id, 
                "prodi_id" => $request->prodi_id
            ]);

        $mahasiswa->save();
        
        $karya_ilmiah = new Karya_ilmiah;
        $karya_ilmiah->judul = $request->judul;
        $karya_ilmiah->bahasa = $request->bahasa;
        $karya_ilmiah->jenis_dokumen_id = $request->jenis_dokumen_id;
        $karya_ilmiah->mahasiswa_id = $mahasiswa->id;
        $karya_ilmiah->dosen_pa = $request->dosen_pa;
        $karya_ilmiah->dosen_pembimbing = $request->dosen_pembimbing;
        $karya_ilmiah->dosen_penguji = $request->dosen_penguji;
        $karya_ilmiah->dosen_penguji_eksternal = $request->dosen_penguji_eksternal;
        $karya_ilmiah->is_approved = $request->is_approved;
        $karya_ilmiah->json_dokumen = $this->uploadFile($request->file("dokumen"));

        $karya_ilmiah->save();
        
        
        return back()->with("success", "Berhasil menambah Karya Ilmiah.");;
    }

    function uploadFile(array $file) : string {
        $file = array();
        return json_encode($file);
    }

    function delete($id): RedirectResponse{
        try {
            $karya_ilmiah = Karya_ilmiah::destroy($id);
        } catch (\Exception $e) {
            
            return back()->with("danger", "Tidak dapat menghapus data Karya Ilmiah. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return back()->with("success", "Berhasil hapus Karya Ilmiah.");
    }

    function jsonMahasiswa(){

        return response()->json(Mahasiswa::select("nama", "nim", "jurusan_id", "prodi_id")->with(['jurusan', 'prodi'])->get());
    }

}
