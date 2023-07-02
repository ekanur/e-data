@extends('front/layout/layout')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl m-5 d-flex align-items-center justify-content-center">
    <div class="card mb-4 w-75">
      <div class="card-header align-items-center justify-content-center w-100">
        <div class="container wizard d-flex justify-content-center align-content-center p-0">
          <div class="w-100 p-3 text-white bg-primary rounded text-center">INPUT DATA MAHASISWA</div>
          <div class="w-100 p-3 text-dark bg-white rounded text-center">INPUT DATA AKADEMIK</div>
          <div class="w-100 p-3 text-dark bg-white rounded text-center">UPLOAD DATA KARYA ILMIAH</div>
        </div>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('store-mahasiswa') }}">
          @csrf
          @method('PUT')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nim">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Massukan NIM" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama">NAMA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hp">NO HP</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="hp" name="hp" placeholder="No hp aktif" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="email">EMAIL</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input type="text" id="email" class="form-control" name="email" placeholder="Alamat email aktif" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
            <div class="col-sm-10">
              <textarea id="alamat" class="form-control" name="alamat" placeholder="Alamat lengkap sesuai KTP"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="tahun_angkatan">TAHUN ANGKATAN</label>
            <div class="col-sm-10">
              <div class="container d-flex justify-content-center p-0">
                <input class="form-control bg-white" for="tahun_masuk" id="tahun_masuk" name="tahun_masuk" type="text" pattern="[0-9]{4}" placeholder="Tahun Masuk" />
                <label class="form-label m-2">/</label>
                <input class="form-control bg-white" for="tahun_lulus" id="tahun_lulus" name="tahun_lulus" type="text" pattern="[0-9]{4}" placeholder="Tahun Lulus" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jurusan_id">JURUSAN_id</label>
            <div class="col-sm-10">
             <select class="form-select"  for="jurusan_id" id="jurusan_id" name="jurusan_id">
              <option value="" class="text-grey">--- Pilih Jurusan ---</option>
              @foreach ($jurusan as $datajurusan)
                <option value={{ $datajurusan->id }}>{{ $datajurusan->nama}}</option>
              @endforeach
            </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="prodi_id">PRODI</label>
            <div class="col-sm-10">
              <select class="form-select"  for="prodi_id" id="prodi_id" name="prodi_id">
                <option value="" class="text-grey">--- Pilih Prodi ---</option>
                @foreach ($prodi as $dataprodi)
                <option value={{ $dataprodi->id }}>{{ $dataprodi->nama}}</option>
              @endforeach
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="foto">FOTO DIRI</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" for="foto" id="formFile" name="foto" id="foto">
              </div>
              <div class="form-text"> Unggah foto menggunakan jas almamater, max 2MB </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Back</button>
              <button type="submit" class="btn btn-primary">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
