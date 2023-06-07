<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya_ilmiah;

class DokumenController extends Controller
{
    public function index()
    {
        return view("admin.dokumen");
    }
}
