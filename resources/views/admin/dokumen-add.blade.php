@extends('layouts/contentNavbarLayout')

@section('title', 'Dokumen Karya Ilmiah')

@section('vendor-style')
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
@endsection

@section('vendor-script')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/datatable-init.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Karya Ilmiah / </span>Baru</h4>

@if(null !== session('danger'))
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="alert alert-danger alert-dismissible">
          {{session('danger')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
@elseif(null !== session('success'))
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="alert alert-success alert-dismissible">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
<div class="row">
  

  <div class="col-9 col-md-9 col-lg-9">
    <div class="card mb-4">
      <h5 class="card-header">Akademik</h5>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="currentPassword">Kategori Karya Ilmiah</label>
                <div class="position-relative">
                  <select id="apiAccess" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  
                    <option value="full">Skripsi</option>
                    <option value="modify">Thesis</option>
                    <option value="read-execute">Disertasi</option>
                    <option value="folders">Jurnal</option>
                  </select>
                </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="newPassword">Bahasa</label>
                <div class="position-relative">
                  <select id="apiAccess" class="select2 form-select select2-hidden-accessible form-control" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  
                    <option value="full">Indonesia</option>
                    <option value="modify">Inggris</option>
                    <option value="read-execute">Mandarin</option>
                    <option value="folders">Arab</option>
                  </select>
                </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row">
            

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Dosen PA</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="confirmPassword" id="confirmPassword" placeholder="">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Dosen Pembimbing</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="confirmPassword" id="confirmPassword" placeholder="">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Dosen Penguji</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="confirmPassword" id="confirmPassword" placeholder="">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Dosen Penguji External</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="confirmPassword" id="confirmPassword" placeholder="">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            
          </div>
        <input type="hidden"></form>
      </div>
    </div>

    <div class="card mb-4">
      <h5 class="card-header">Upload Dokumen</h5>
      <div class="row">
        <div class="col-md-5 order-md-0 order-1">
          <div class="card-body">
            <form id="formAccountSettingsApiKey" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
              <div class="row fv-plugins-icon-container">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Cover</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Judul</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Abstrak (ID)</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Abstrak (EN)</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Persetujuan</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Pengesahan</label>
                  <input class="form-control" type="file" id="formFile">
                </div> 
                <div class="mb-3">
                  <label for="formFile" class="form-label">Pernyataan Keaslian</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Lampiran</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Dokumen Lengkap</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Artikel</label>
                  <input class="form-control" type="file" id="formFile">
                </div>  
              </div>
            <input type="hidden"></form>
          </div>
        </div>
        <div class="col-md-7 order-md-1 order-0">
          <div class="text-center mt-4 mx-3 mx-md-0">
            <img src="{{asset('/assets/img/illustrations/man-with-laptop-light.png')}}" class="img-fluid" alt="Api Key Image" width="350" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-3 col-md-3 col-lg-3">
    <div class="card mb-4">
      <h5 class="card-header">Pilih Mahasiswa</h5>
      <div class="card-body">
        {{-- <p class="fw-semibold mb-3">Two factor authentication is not enabled yet.</p>
        <p class="w-75">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.
          <a href="javascript:void(0);">Learn more.</a>
        </p> --}}
        <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#enableOTP">Cari/Tambah</button>
      </div>
      <h5 class="card-header border-top">
        <div class="form-check form-switch">
          <label class="form-check-label" for="flexSwitchCheckChecked" style="padding-left:1em;padding-top:0.3em">Verified</label>
        <input class="form-check-input" style="width:2.5em;height:1.5em" type="checkbox" id="flexSwitchCheckChecked">
        
        {{--  --}}        
      </div></h5>
      <div class="card-body">
        
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#enableOTP">Simpan</button>
        
      </div>
      
    </div>
  </div>
    
</div>

@endsection
