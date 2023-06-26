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
          <div class="w-100 p-3 text-white bg-primary rounded text-center">INPUT DATA AKADEMIK</div>
          <div class="w-100 p-3 text-white bg-primary rounded text-center">UPLOAD DATA KARYA ILMIAH</div>
        </div>
      </div>

      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nim">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Massukan NIM" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-lengkap">NAMA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-lengkap" name="nama" placeholder="Nama lengkap" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="no-hp">NO HP</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="no-hp" name="no-hp" placeholder="No hp aktif" />
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
            <label class="col-sm-2 col-form-label" for="tahun-angkatan">TAHUN ANGKATAN</label>
            <div class="col-sm-10">
              <div class="container d-flex justify-content-center p-0">
                <input class="form-control bg-white" for="tahun-masuk" id="tahun-masuk" name="tahun-masuk" type="text" pattern="[0-9]{4}" placeholder="Tahun Masuk" />
                <label class="form-label m-2">/</label>
                <input class="form-control bg-white" for="tahun-lulus" id="tahun-lulus" name="tahun-lulus" type="text" pattern="[0-9]{4}" placeholder="Tahun Lulus" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jurusan">JURUSAN</label>
            <div class="col-sm-10">
              {{-- <div class="form-group">
                <select class="form-control" id="jurusan" name="jurusan">
                   @foreach 
                   ($jurusans as $jurusan)
                      <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                   @endforeach
                </select>
             </div> --}}
             <select class="form-select"  for="jurusan" id="jurusan" name="jurusan">
              <option value="" class="text-grey">--- Pilih Jurusan ---</option>
              <option value="#">One</option>
              <option value="#">Two</option>
              <option value="#">Three</option>
            </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="email">PRODI</label>
            <div class="col-sm-10">
              <select class="form-select"  for="jurusan" id="jurusan" name="jurusan">
                <option value="" class="text-grey">--- Pilih Prodi ---</option>
                <option value="#">One</option>
                <option value="#">Two</option>
                <option value="#">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="foto">FOTO DIRI</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="formFile">
              </div>
              <div class="form-text"> Unggah foto menggunakan jas almamater, max 2MB </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
