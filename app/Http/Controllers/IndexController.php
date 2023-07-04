<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halaman;

class IndexController extends Controller
{
  public function index()
  {
      $halaman = Halaman::where('url', 'url_tc')->firstOrFail();
      return view('front.index', ['halaman' => $halaman]);
  }
}
