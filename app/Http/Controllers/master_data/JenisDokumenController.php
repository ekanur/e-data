<?php

namespace App\Http\Controllers\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jenis_dokumen;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class JenisDokumenController extends Controller
{
    function index() : View {
        $title = 'Hapus Dokumen!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.master_data.jenis_dokumen")->with('jenis_dokumen',Jenis_dokumen::all());
    }
    
    function edit($id) : View{
        return view("admin.master_data.jenis_dokumen")->with('jenis_dokumen', Jenis_dokumen::all())->with('edit', Jenis_dokumen::find($id));
    }

    function update(Request $request): RedirectResponse{
        $jenis_dokumen = Jenis_dokumen::findOrFail($request->id);
        $jenis_dokumen->nama = $request->nama;
        $jenis_dokumen->kode = $request->kode;
        $jenis_dokumen->save();
        return redirect()->route("jenis-dokumen")->with("success", "Berhasil meng-update Jenis dokumen.");;
    }

    function create(Request $request): RedirectResponse{
        $jenis_dokumen = new Jenis_dokumen;
        $jenis_dokumen->nama = $request->nama;
        $jenis_dokumen->kode = $request->kode;
        $jenis_dokumen->save();
        
        
        return redirect()->route("jenis-dokumen")->with("success", "Berhasil menambah Jenis dokumen.");;
    }

    function delete($id): RedirectResponse{
        try {
            $jenis_dokumen = Jenis_dokumen::destroy($id);
        } catch (\Exception $e) {
            
            return redirect()->route("jenis-dokumen")->with("danger", "Tidak dapat menghapus data Dokumen. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return redirect()->route("jenis-dokumen")->with("success", "Berhasil hapus Jenis dokumen.");
    }
}
