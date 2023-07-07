@extends('front/layout/layout')

@section('content')

  <!-- Main  -->
    <div class="card m-5 custom-margin border-0  w-75 rounded mx-auto" style="box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16)">
      <div class="card-body pe-5 ps-5 pb-0 pt-0">
        <!-- about us title -->
        <h3 class="card-title text-center m-4">{{ $halaman->judul }}</h3>
        <!-- teks about us -->
        <div class="overflow-auto tc-content pe-3">
          <p class="text-secondary">
            {{ $halaman->isi }}
          </p>
        </div>
      </div>
    </div>
@endsection
