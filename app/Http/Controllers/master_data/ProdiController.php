<?php

namespace App\Http\Controllers\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ProdiController extends Controller
{
    function index() : View {
        $title = 'Hapus Prodi!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.master_data.prodi")->with('prodi',Prodi::all());
    }
    
    function edit($id) : View{
        return view("admin.master_data.prodi")->with('prodi', Prodi::all())->with('edit', Prodi::find($id));
    }

    function update(Request $request): RedirectResponse{
        $prodi = Prodi::findOrFail($request->id);
        $prodi->nama = $request->nama;
        $prodi->kode = $request->kode;
        $prodi->save();
        return back()->with("success", "Berhasil meng-update prodi.");;
    }

    function create(Request $request): RedirectResponse{
        $prodi = new Prodi;
        $prodi->nama = $request->nama;
        $prodi->kode = $request->kode;
        $prodi->save();
        
        
        return back()->with("success", "Berhasil menambah prodi.");;
    }

    function delete($id): RedirectResponse{
        try {
            $prodi = Prodi::destroy($id);
        } catch (\Exception $e) {
            
            return back()->with("danger", "Tidak dapat menghapus data Prodi. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return back()->with("success", "Berhasil hapus prodi.");
    }
}
