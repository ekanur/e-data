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
          <div class="w-100 p-3 text-dark bg-white rounded text-center">INPUT DATA AKADEMIK</div>
          <div class="w-100 p-3 text-white bg-primary rounded text-center">UPLOAD DATA KARYA ILMIAH</div>
        </div>
      </div>

      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-sampul">COVER / SAMPUL</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-sampul" name="hal-sampul">
              </div>
              <div class="form-text"> Upload Halaman Sampul / Cover (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-judul">JUDUL</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-judul" name="hal-judul">
              </div>
              <div class="form-text"> Upload Halaman Judul (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-abstrak-in">ABSTRAK (IN)</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-abstrak-in" name="hal-abstrak-in">
              </div>
              <div class="form-text"> Upload Halaman Abstrak Dalam Bahasa Indoneisa (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-abstrak-eng">ABSTRAK (EGN)</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-abstrak-eng" name="hal-abstrak-eng">
              </div>
              <div class="form-text"> Upload Halaman Abstrak Dalam Bahasa Inggris (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-persetujuan">PERSETUJUAN</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-persetujuan" name="hal-persetujuan">
              </div>
              <div class="form-text"> Upload Halaman Persetujuan (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-pengesahan">PENGESAHAN</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-pengesahan" name="hal-pengesahan">
              </div>
              <div class="form-text"> Upload Halaman Pengesahan (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-pernyataan-keaslian">PERNYATAAN KEASLIAN</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-pernyataan-keaslian" name="hal-pernyataan-keaslian">
              </div>
              <div class="form-text">Upload Halaman Pernyataan Keaslian (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="hal-lampiran">LAMPIRAN</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="hal-lampiran" name="hal-lampiran">
              </div>
              <div class="form-text"> Upload Halaman Lampiran (Format PDF) </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dokumen-lengkap">DOKUMEN LENGKAP</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="dokumen-lengkap" name="dokumen-lengkap">
              </div>
              <div class="form-text"> Upload Dokumen Jadi (TA, SKRIPSI,TESIS,DISERTASI) dari Cover/Sampul, Logo, Judul, Persetujuan, Pengesahan,
                                      Pernyataan Keaslian, Abstran IN dan ENG, Ucapan Terimakasih, Daftar isi, Daftar Gambar, Daftar Lampiran,
                                      Daftar Istilah, Bab 1-6, Daftar Rujukan,Lampiran, Riwayat hidup, Dalam bentuk 1 File PDF Dengan Halaman
                                      yang Sudah Berurutan Sesuai Dengan Daftar Isi. </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dokumen-artikel">DOKUMEN ARTIKEL</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="dokumen-artikel" name="dokumen-artikel">
              </div>
              <div class="form-text"> Upload Dokumen Artikel Tentang Karya Tulis (TA, SKRIPSI, TESIS, DIERTASI) Yang Sudah Dibuat</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="url" id="link-published" name="link-published" placeholder="Masukkan Link Published">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="index-jurnal-publiher"></label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="text" id="index-jurnal-publiher" name="index-jurnal-publiher" placeholder="Index Jurnal Publisher">
              </div>
              <div class="form-text">Contoh : scopus. DOAJ.dll</div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="dokumen-lengkap">DOKUMEN LENGKAP</label>
            <div class="col-sm-10">
              <div class="mb-0">
                <input class="form-control" type="file" id="dokumen-lengkap" name="dokumen-lengkap">
              </div>
              <div class="form-text"> Upload Semua Dokumen (Cover, Artikel, File Presentasi, Abstrak, Daftar Pustaka, Lembar Persetujuan,
                                      Lembar Pengesahan, dan Lampiran, Bab 1- Bab 6) Dengan Format RAR Maksimal 5MB  </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
