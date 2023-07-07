@extends('front/layout/layout')

@section('content')

  <!-- Main  -->
    <div class="card m-5 custom-margin border-0  w-75 rounded mx-auto" style="box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16)">
      <div class="card-body pe-5 ps-5 pb-0 pt-0">
        <!-- t&c title -->
        <h3 class="card-title text-center m-4">{{ $halaman->judul ?? "" }}</h3>
        <!-- t&c  -->
        <div class="overflow-auto tc-content pe-3">
          <p class="text-secondary">
            {{ $halaman->isi ?? "" }}
          </p>
        </div>
        <!-- checbox & button  -->
        <div class="form-check text-center d-flex align-items-center mt-2 mb-4">
          <input class="form-check-input" type="checkbox" value="" id="Checkbox" />
          <label class="form-check-label ms-2 me-2" for="Checkbox"> I Agree</label>
          <div class="flex-grow-1"></div>
          <button class="btn btn-primary btn-sm"><a class="text-white text-decoration-none" href="{{ route('create-mahasiswa') }}">Upload</a></button>
        </div>
      </div>
    </div>
@endsection
