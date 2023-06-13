<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya_ilmiah;
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
    
    function edit($id) : View{
        return view("admin.dokumen")->with('edit', Karya_ilmiah::find($id));
    }

    function update(Request $request): RedirectResponse{
        $karya_ilmiah = Karya_ilmiah::findOrFail($request->id);
        $karya_ilmiah->nama = $request->nama;
        $karya_ilmiah->kode = $request->kode;
        $karya_ilmiah->save();
        return back()->with("success", "Berhasil meng-update Karya Ilmiah.");;
    }

    function create(Request $request): RedirectResponse{
        $karya_ilmiah = new Karya_ilmiah;
        $karya_ilmiah->nama = $request->nama;
        $karya_ilmiah->kode = $request->kode;
        $karya_ilmiah->save();
        
        
        return back()->with("success", "Berhasil menambah Karya Ilmiah.");;
    }

    function delete($id): RedirectResponse{
        try {
            $karya_ilmiah = Karya_ilmiah::destroy($id);
        } catch (\Exception $e) {
            
            return back()->with("danger", "Tidak dapat menghapus data Karya Ilmiah. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return back()->with("success", "Berhasil hapus Karya Ilmiah.");
    }

}
