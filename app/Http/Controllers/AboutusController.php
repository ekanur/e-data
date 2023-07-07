<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halaman;

class AboutusController extends Controller
{
  public function index()
  {
      $halaman = Halaman::where('url', 'url_about-us')->first();
      return view('front.about-us', ['halaman' => $halaman]);
  }
}

