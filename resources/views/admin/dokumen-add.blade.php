@extends('layouts/contentNavbarLayout')

@section('title', 'Dokumen Karya Ilmiah')

@section('vendor-style')
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css"> --}}
@endsection

@section('vendor-script')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script> --}}

@endsection

@section('page-script')
<script src="{{asset('assets/js/datatable-init.js')}}"></script>
<script>
  
</script>
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
<form enctype="multipart/form-data" method="POST" action="{{route('karya-ilmiah-create')}}">
@csrf
<div class="row">
  
  <div class="col-9 col-md-9 col-lg-9">
    <div class="card mb-4">
      <h5 class="card-header">Mahasiswa</h5>
      <div class="card-body">
        
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">NIM Mahasiswa</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Nama Lengkap</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="nama" id="confirmPassword" placeholder="">
                
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Jurusan</label>
              
                <select id="apiAccess" name="jurusan_id" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  @foreach ($jurusan as $jurusan)
                      <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                  @endforeach
                </select>
                
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Program Studi</label>
              
                <select id="apiAccess" name="prodi_id" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  @foreach ($prodi as $prodi)
                      <option value="{{$prodi->id}}">{{$prodi->nama}}</option>
                  @endforeach
                </select>
                
            </div>
            
            
          </div>
        <input type="hidden">
      </div>
    </div>

    <div class="card mb-4">
      <h5 class="card-header">Akademik</h5>
      <div class="card-body">
       
          <div class="row">
            

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="dosen_pa">Dosen PA</label>
              <select id="apiAccess" name="dosen_pa" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                @foreach ($dosen as $dosen_pa)
                    <option value="{{$dosen_pa->id}}">{{$dosen_pa->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="dosen_pembimbing">Dosen Pembimbing</label>
              <select id="apiAccess" name="dosen_pembimbing" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  @foreach ($dosen as $dosen_pembimbing)
                      <option value="{{$dosen_pembimbing->id}}">{{$dosen_pembimbing->name}}</option>
                  @endforeach
              </select>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="dosen_penguji">Dosen Penguji</label>
              <select id="apiAccess" name="dosen_penguji" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                @foreach ($dosen as $dosen)
                    <option value="{{$dosen->id}}">{{$dosen->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="dosen_penguji_eksternal">Dosen Penguji External</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="dosen_penguji_eksternal" id="dosen_penguji_eksternal" placeholder="">
                <span class="input-group-text cursor-pointer"><i class='bx bx-search-alt'></i></span>
              </div><div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            
          </div>
        <input type="hidden">
      </div>
    </div>

    <div class="card mb-4">
      <h5 class="card-header">Upload Dokumen</h5>
      <div class="card-body">
      
        <div class="row mb-4">
          <div class="col-12 mb-3">
            
              <label class="form-label" for="confirmPassword">Judul Lengkap</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="text" name="judul" placeholder="">
                
              </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            
          </div>
          <div class="col-md-6">
            <label class="form-label" for="currentPassword">Kategori Karya Ilmiah</label>
              <div class="position-relative">
                <select name="jenis_dokumen_id" class="select2 form-select select2-hidden-accessible" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                  @foreach ($jenis_dokumen as $jenis_dokumen)
                      <option value="{{$jenis_dokumen->id}}">{{$jenis_dokumen->nama}}</option>
                  @endforeach
                </select>
              </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="newPassword">Bahasa</label>
              <div class="position-relative">
                <select name="bahasa" class="select2 form-select select2-hidden-accessible form-control" data-select2-id="apiAccess" tabindex="-1" aria-hidden="true">
                
                  <option value="ID">Indonesia</option>
                  <option value="EN">Inggris</option>
                  <option value="CH">Mandarin</option>
                  <option value="AR">Arab</option>
                </select>
              </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-5 order-md-0 order-1">
            
              
              <div class="row">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Cover</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Judul</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Abstrak (ID)</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Abstrak (EN)</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Persetujuan</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Pengesahan</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div> 
                <div class="mb-3">
                  <label for="formFile" class="form-label">Pernyataan Keaslian</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Halaman Lampiran</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Dokumen Lengkap</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Artikel</label>
                  <input class="form-control" type="file" id="formFile" name="dokumen[]">
                </div>  
              </div>
              <input type="hidden">
            
          </div>
          <div class="col-md-7 order-md-1 order-0">
            <div class="text-center mt-4 mx-3 mx-md-0">
              <img src="{{asset('/assets/img/illustrations/man-with-laptop-light.png')}}" class="img-fluid" alt="Api Key Image" width="350" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
            </div>
          </div>
        </div>
      
    </div>
    </div>
  </div>

  <div class="col-3 col-md-3 col-lg-3">
    <div class="card mb-4">
      {{-- <h5 class="card-header">Pilih Mahasiswa</h5> --}}
      
      <h5 class="card-header border-top">
        <div class="form-check form-switch">
          <label class="form-check-label" for="flexSwitchCheckChecked" style="padding-left:1em;padding-top:0.3em">Approve</label>
        <input class="form-check-input" style="width:2.5em;height:1.5em" type="checkbox" name="is_approved">
        
        {{--  --}}        
      </div></h5>
      <div class="card-body">
        
        <button class="btn btn-success" type="submit">Publish</button>
        
      </div>
      
    </div>
  </div>
    
</div>
</form>
@endsection
