<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halaman;

class IndexController extends Controller
{
  public function index()
  {
      $halaman = Halaman::where('url', 'url_tc')->first();
      return view('front.index', ['halaman' => $halaman]);
  }
}
