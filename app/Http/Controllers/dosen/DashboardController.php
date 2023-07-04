<?php

namespace App\Http\Controllers\dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Karya_ilmiah;

class DashboardController extends Controller
{
    function index() : View {
        $data = [
            "unverified" => Karya_ilmiah::whereIsApproved(0)->count(),
        ];   

        return view('dosen.index')->with("data", (object)$data);
    }
}
