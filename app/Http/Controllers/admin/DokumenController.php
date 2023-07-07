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
use Illuminate\Validation\Rules\File;

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
        return redirect()->route('karya-ilmiah')->with("success", "Berhasil meng-update Karya Ilmiah.");;
    }

    function create(Request $request): RedirectResponse{
        // dd($request->is_approved);

        $this->validate($request, [
            'nim' => 'numeric|min:3',
            'nama' => 'min:3',
            'file_cover' => [File::types(['pdf', 'doc', 'docx'])],
            'file_judul' => [File::types(['pdf', 'doc', 'docx'])],
            'file_abstrak_id' => [File::types(['pdf', 'doc', 'docx'])],
            'file_abstrak_en' => [File::types(['pdf', 'doc', 'docx'])],
            'file_persetujuan' => [File::types(['pdf', 'doc', 'docx'])],
            'file_pengesahan' => [File::types(['pdf', 'doc', 'docx'])],
            'file_keaslian' => [File::types(['pdf', 'doc', 'docx'])],
            'file_lampiran' => [File::types(['pdf', 'doc', 'docx'])],
            'file_lengkap' => [File::types(['pdf', 'doc', 'docx'])],
            'file_artikel' => [File::types(['pdf', 'doc', 'docx'])]
        ]);

        $upload_file = array();

        $mahasiswa = Mahasiswa::firstOrNew(['nim' => $request->nim],
            [
                "nim" => $request->nim, 
                "nama" => $request->nama, 
                "jurusan_id" => $request->jurusan_id, 
                "prodi_id" => $request->prodi_id
            ]);

        $mahasiswa->save();

        $currenttime = time();

        // try {
            $upload_file['cover'] = $request->file("file_cover")->storeAs("public/dokumen", "cover_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['judul'] = $request->file("file_judul")->storeAs("public/dokumen", "judul_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['abstrak_id'] = $request->file("file_abstrak_id")->storeAs("public/dokumen", "abstrak_id_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['abstrak_en'] = $request->file("file_abstrak_en")->storeAs("public/dokumen", "abstrak_en_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['persetujuan'] = $request->file("file_persetujuan")->storeAs("public/dokumen", "persetujuan_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['pengesahan'] = $request->file("file_pengesahan")->storeAs("public/dokumen", "pengesahan_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['keaslian'] = $request->file("file_keaslian")->storeAs("public/dokumen", "keaslian_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['lampiran'] = $request->file("file_lampiran")->storeAs("public/dokumen", "lampiran_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['lengkap'] = $request->file("file_lengkap")->storeAs("public/dokumen", "lengkap_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
            $upload_file['artikel'] = $request->file("file_artikel")->storeAs("public/dokumen", "artikel_".$request->nim."_".$currenttime.".".$request->file("file_cover")->getClientOriginalExtension());
      
        // } catch (\Exception $e) {
        //     $mahasiswa->delete();

        //     return back()->with("danger", "Gagal menambah Karya Ilmiah.");
        // }

        $karya_ilmiah = new Karya_ilmiah;
        $karya_ilmiah->judul = $request->judul;
        $karya_ilmiah->bahasa = $request->bahasa;
        $karya_ilmiah->jenis_dokumen_id = $request->jenis_dokumen_id;
        $karya_ilmiah->mahasiswa_id = $mahasiswa->id;
        $karya_ilmiah->dosen_pa = $request->dosen_pa;
        $karya_ilmiah->dosen_pembimbing = $request->dosen_pembimbing;
        $karya_ilmiah->dosen_penguji = $request->dosen_penguji;
        $karya_ilmiah->dosen_penguji_eksternal = $request->dosen_penguji_eksternal;
        $karya_ilmiah->is_approved = $request->is_approved ?? 0;
        $karya_ilmiah->json_dokumen = json_encode($upload_file);

        try {
            $karya_ilmiah->save();

        } catch (\Exception $e) {
            $mahasiswa->delete();

            return back()->with("danger", "Gagal menambah Karya Ilmiah." . Str::of($e)->substr(0,85)." ....");
        }

        
        return redirect()->route('karya-ilmiah')->with("success", "Berhasil menambah Karya Ilmiah.");;
    }

    function uploadFile(array $files, string $nim) : string {
        $uploaded_files = [];
        $i=1;
        foreach($files as $file){
            $file_name = $i . '_'. $nim . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('dokumen', $file_name);

            // Simpan path file yang di-upload ke dalam array
            $uploaded_files[] = $path;
        }

        return json_encode($uploaded_files);
    }

    function delete($id): RedirectResponse{
        try {
            $karya_ilmiah = Karya_ilmiah::destroy($id);
        } catch (\Exception $e) {
            
            return redirect()->route('karya-ilmiah')->with("danger", "Tidak dapat menghapus data Karya Ilmiah. ".Str::of($e)->substr(0,85)." ....");
        }
        
        return redirect()->route('karya-ilmiah')->with("success", "Berhasil hapus Karya Ilmiah.");
    }

    // function jsonMahasiswa(){

    //     return response()->json(Mahasiswa::select("nama", "nim", "jurusan_id", "prodi_id")->with(['jurusan', 'prodi'])->get());
    // }

}
