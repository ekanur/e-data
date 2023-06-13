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
  <!-- Total Revenue -->
  
  <!--/ Total Revenue -->
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
  <h5 class="card-header">Daftar Karya Ilmiah</h5>
  <div class="card-datatable pt-0">
    <table class="table table-hover" id="table">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Prodi-Jurusan</th>
          <th>PA</th>
          <th>Pembimbing</th>
          <th>Penguji</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($karya_ilmiah as $karya_ilmiah)
        <tr>
          <td>
            <strong>{{$karya_ilmiah->judul}}</strong><br/>
            <small><span class="badge rounded-pill bg-label-primary">{{$karya_ilmiah->jenis_dokumen->nama}}</span></small>

            @unless ($karya_ilmiah->is_approved===0)
            <span class="badge rounded-pill bg-label-success">Verified</span>
            @endunless 
            <br/>
          <small>Oleh : {{$karya_ilmiah->mahasiswa->nama}} ({{$karya_ilmiah->mahasiswa->nim}})</small>
            
          </td>
          <td><strong>{{$karya_ilmiah->mahasiswa->prodi->nama}}</strong> <br/>{{$karya_ilmiah->mahasiswa->jurusan->nama}}</td>
          <td>
            {{$karya_ilmiah->pa->name}}
          </td>
          <td>
            {{$karya_ilmiah->pembimbing->name}}
          </td>
          <td>
            {{$karya_ilmiah->penguji->name}}
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route("karya-ilmiah-edit", ["id" => $karya_ilmiah->id])}}"><i class="bx bx-edit-alt me-1"></i> Detail</a>
                <a class="dropdown-item" href="{{route("karya-ilmiah-edit", ["id" => $karya_ilmiah->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{route("karya-ilmiah-delete", ["id" => $karya_ilmiah->id])}}" data-confirm-delete="true"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
</div>
  </div>
    
</div>

@endsection
