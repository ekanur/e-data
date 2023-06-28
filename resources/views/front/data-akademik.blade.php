@extends('front/layout/layout')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl m-5 d-flex align-items-center justify-content-center">
    <div class="card mb-4 w-75">
      <div class="card-header align-items-center justify-content-center w-100">
        <div class="container wizard d-flex justify-content-center align-content-center p-0">
          <div class="w-100 p-3 text-dark bg-white rounded text-center">INPUT DATA MAHASISWA</div>
          <div class="w-100 p-3 text-white bg-primary rounded text-center">INPUT DATA AKADEMIK</div>
          <div class="w-100 p-3 text-dark bg-white rounded text-center">UPLOAD DATA KARYA ILMIAH</div>
        </div>
      </div>

      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="kategori">KATEGORI</label>
            <div class="col-sm-10">
              <select class="form-select"  for="kategori" id="kategori" name="kategori">
                <option value="" class="text-grey">--- Pilih Kategori Dokumen Karya Ilmiah ---</option>
                <option value="#">One</option>
                <option value="#">Two</option>
                <option value="#">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="email">BAHASA</label>
            <div class="col-sm-10">
              <select class="form-select"  for="bahasa" id="bahasa" name="bahasa">
                <option value="" class="text-grey">--- Pilih Bahasa ---</option>
                <option value="Indonesia (IDN)">Indonesia (IDN)</option>
                <option value="Inggris (ENG)">Inggris (ENG)</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dosen-pa">DOSEN PA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="dosen-pa" name="dosen-pa" placeholder="Search Nama Dosen Pembimbing Akadmik" />
              {{-- minus auto complate --}}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dosen-pembimbing">DOSEN PEMBIMBING</label>
            <div class="col-sm-10">
              <div class="container d-flex justify-content-center p-0">
                <input type="text" class="form-control" id="dosen-pembimbing" name="dosen-pembimbing" placeholder="Search Nama Dosen Pembimbing" />
                {{-- minus auto complate --}}
                <button type="submit" class="btn btn-outline-primary ms-2">+</button>
              </div>
              <div class="form-text">Klik icon tambah untuk menambahkan dosen pembimbing</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dosen-penguji">DOSEN PENGUJI</label>
            <div class="col-sm-10">
              <div class="container d-flex justify-content-center p-0">
                <input type="text" class="form-control" id="dosen-penguji" name="dosen-penguji" placeholder="Search Nama Dosen Penguji" />
                {{-- minus auto complate --}}
                <button type="submit" class="btn btn-outline-primary ms-2">+</button>
              </div>
              <div class="form-text">Klik icon tambah untuk menambahkan dosen penguji</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dosen-penguji">DOSEN EKSTERNAL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dosen-penguji" name="dosen-eksternal" placeholder="Tuliskan Nama Dosen Penguji Eksternal" />
              <div class="form-text">Khusus untuk ujian desertasi jenjang S3</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="judul">JUDUL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Tuliskan Judul Karya Ilmiah" />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
