<?php

namespace App\Http\Controllers\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\View\View;

class JurusanController extends Controller
{
    function index() : View {
        $jurusan = Jurusan::all();

        return view("admin.master_data.jurusan")->with('jurusan',$jurusan);
    }
}
