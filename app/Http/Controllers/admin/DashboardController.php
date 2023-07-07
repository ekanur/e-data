<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya_ilmiah;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            "unverified" => Karya_ilmiah::whereIsApproved(0)->count(),
        ];   

        return view('admin.index')->with("data", (object)$data);
    }
}
