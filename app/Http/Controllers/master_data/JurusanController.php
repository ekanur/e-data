<?php

namespace App\Http\Controllers\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class JurusanController extends Controller
{
    function index() : View {
        $title = 'Hapus Jurusan!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.master_data.jurusan")->with('jurusan',Jurusan::all());
    }
    
    function edit($id) : View{
        return view("admin.master_data.jurusan")->with('jurusan', Jurusan::all())->with('edit', Jurusan::find($id));
    }

    function update(Request $request): RedirectResponse{
        $jurusan = Jurusan::findOrFail($request->id);
        $jurusan->nama = $request->nama;
        $jurusan->kode = $request->kode;
        $jurusan->save();
        
        return redirect()->route("jurusan")->with("success", "Berhasil meng-update jurusan.");;
    }

    function create(Request $request): RedirectResponse{
        $jurusan = new Jurusan;
        $jurusan->nama = $request->nama;
        $jurusan->kode = $request->kode;
        $jurusan->save();
        
        return redirect()->route("jurusan")->with("success", "Berhasil menambah jurusan.");;
    }

    function delete($id): RedirectResponse{
        try {
            $jurusan = Jurusan::destroy($id);
        } catch (\Exception $e) {
            
            return redirect()->route("jurusan")->with("danger", "Tidak dapat menghapus data Jurusan. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return redirect()->route("jurusan")->with("success", "Berhasil hapus jurusan.");
    }
}
